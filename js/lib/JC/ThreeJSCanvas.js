			

	function ThreeJSCanvas(domParent) {

		this.objects3D = [];


		this.scene = new THREE.Scene();
		this.camera = new THREE.PerspectiveCamera( 45, window.innerWidth/window.innerHeight, 0.1, 1000 );

		this.camera.position.y = 0;
		this.camera.position.z = 20;

		this.renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});
		this.renderer.setSize( window.innerWidth, window.innerHeight );
		this.renderer.setClearColor(0x000000, 0);
	

		jQuery(domParent).append(this.renderer.domElement);

	}


	ThreeJSCanvas.prototype.render = function() {
		this.renderer.render(this.scene, this.camera);
	}


	ThreeJSCanvas.prototype.resize = function() {
		  this.renderer.setSize(window.innerWidth, window.innerHeight);
		  this.camera.aspect = window.innerWidth / window.innerHeight;
		  this.camera.updateProjectionMatrix();
	}


	ThreeJSCanvas.prototype.addToScene = function(object) {
		this.scene.add(object); 

	}


	ThreeJSCanvas.prototype.loadJSONObject = function(JSONpath, onObjectLoad, texturePath) {
		
		// rewrite function( object{}, onLoadComplete, onProgress )


		var oLoader = new THREE.ObjectLoader();
		var scene = this.scene;
		var objects3D = this.objects3D;
		var material = new THREE.MeshLambertMaterial({color: 0xdddddd}); 

		oLoader.load(JSONpath, onLoadComplete, onLoadProgress);

		function onLoadProgress(httpReq) {
			//console.log(httpReq.srcElement.responseURL);
			var percent = Math.round((httpReq.loaded / httpReq.total)*100);
			console.log("Loading: " + percent + "% (" + 
			Math.round(httpReq.loaded/1000) + "/" + Math.round(httpReq.total/1000) + "kb)");

		}

		function onLoadComplete(object, materials) {

			if(texturePath != null) {

				var texLoader = new THREE.TextureLoader();
				texLoader.load(texturePath,	function ( texture ) {
						material.map = texture;
		 				setMaterial();
					}
				);

			} else {
				setMaterial();
			}


			function setMaterial() {
				object.traverse( function(child) {
					if (child instanceof THREE.Mesh) {
					child.material = material;
					child.geometry.computeVertexNormals();
					}
				});
			}

			object.position.x = 0;
			object.position.y = 0;
			object.position.z = 0;
			object.scale.set(0.5, 0.5, 0.5);

			objects3D.push(object);

			onObjectLoad(object);

			
		}

	}


	ThreeJSCanvas.prototype.getLoadedObject = function () {
		return this.objects3D[this.objects3D.length-1];

	}
