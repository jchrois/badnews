jQuery(document).ready(function(){



	var url = wnm_custom.template_url;

	console.log(url);

	var canvas_one = new ThreeJSCanvas("#threeCanvas_01");
	var sphere = new THREE.Object3D();


	canvas_one.loadJSONObject(url + "/3d/sphere.json", function (object) {
    	sphere = object;
    	sphere.material.wireframe = true;
    	canvas_one.addToScene(sphere);
    }
	);

    var light1 = new THREE.HemisphereLight(0xffffff, 0xffffff, 1);
	light1.position.set( 100, 50, 100 );
	canvas_one.addToScene( light1 );


	var renderLoop = function () {
		requestAnimationFrame( renderLoop );
		sphere.rotation.y += 0.0005;

		canvas_one.render();

	};
	renderLoop();

	
	jQuery( window ).resize(function() {
		canvas_one.resize();
		//console.log("resize")

	});



});