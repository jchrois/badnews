
(function ($, root, undefined) {

	$(function () {
		
		var scene = new THREE.Scene();
		var camera = new THREE.PerspectiveCamera( 50, window.innerWidth/window.innerHeight, 0.1, 1000 );
		var renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});

		renderer.setClearColor(0x000000, 0);


		$(window).on('load resize', function() {
			renderer.setSize( window.innerWidth-18, window.innerHeight );
      		camera.aspect = window.innerWidth / window.innerHeight;
      		camera.updateProjectionMatrix();

		});


		console.log("Three main init");


		$(".threejs_canvas_01").append(renderer.domElement);


		var geometry = new THREE.IcosahedronGeometry( 0.2, 0 );
		var material = new THREE.MeshBasicMaterial( { color: 0x222222 } );
		material.wireframe = true;

		var cube = new THREE.Mesh( geometry, material );
		scene.add( cube );

		cube.position.x = -4;
		cube.position.y = -0.5;
		camera.position.z = 5;

		var render = function () {
			requestAnimationFrame( render );

			cube.rotation.x += 0.005;
			cube.rotation.y += 0.007;
			cube.position.x += 0.005;
			cube.position.y += 0.0005;

			if(cube.position.x>5) {
				cube.position.x = -4;
			}

			if(cube.position.y>3) {
				cube.position.y = -3;
			}

			renderer.render(scene, camera);
		};

		render();




	});
})(jQuery, this);
