import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.137.5-HJEdoVYPhjkiJWkt6XIa/mode=imports,min/optimized/three.js';


// Get the current year for the copyright message

let date = new Date();
let year = date.getFullYear();

let copyright = document.getElementById('copyright');
copyright.innerHTML = `Copyright © ${year} Andreas Krüger. All rights reserved.`;

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

const renderer = new THREE.WebGLRenderer({
  canvas: document.querySelector('#bg'),
});

renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(window.innerWidth, window.innerHeight);
camera.position.setZ(30);
camera.position.setX(-3);

renderer.render(scene, camera);

// torus

const geometry = new THREE.TorusGeometry(10, 3, 16, 100);
const material = new THREE.MeshStandardMaterial({ color: 0xff6347 });
const torus = new THREE.Mesh(geometry, material);

scene.add(torus);

// light

const pointLight = new THREE.PointLight(0xffffff);
pointLight.position.set(5, 5, 5);

const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(pointLight, ambientLight);

// stars 
function addStar() {
    const geometry = new THREE.SphereGeometry(0.25, 24, 24);
    const material = new THREE.MeshStandardMaterial({ color: 0xffffff });
    const star = new THREE.Mesh(geometry, material);
  
    const [x, y, z] = Array(3)
      .fill()
      .map(() => THREE.MathUtils.randFloatSpread(100));
  
    star.position.set(x, y, z);
    scene.add(star);
  }
  
  Array(200).fill().forEach(addStar);

// space background

const spaceTexture = new THREE.TextureLoader().load('assets/space.jpg');
scene.background = spaceTexture;


// avatar

const avatarTexture = new THREE.TextureLoader().load('assets/andreas_krueger.jpg');

const avatar = new THREE.Mesh(new THREE.BoxGeometry(3, 3, 3), new THREE.MeshBasicMaterial({ map: avatarTexture }));

scene.add(avatar);

// moon

const moonTexture = new THREE.TextureLoader().load('assets/moon.jpg');
const normalTexture = new THREE.TextureLoader().load('assets/normal.jpg');

const moon = new THREE.Mesh(
  new THREE.SphereGeometry(3, 32, 32),
  new THREE.MeshStandardMaterial({
    map: moonTexture,
    normalMap: normalTexture,
  })
);

scene.add(moon);

// knot

const knotGeometry = new THREE.TorusKnotGeometry(10, 3, 16, 100);
const knotMaterial = new THREE.MeshStandardMaterial({ color: 0x4891c2 });
const knotTorus = new THREE.Mesh(knotGeometry, knotMaterial);

scene.add(knotTorus);




// positioning

knotTorus.position.x = -30;
knotTorus.position.y = -25;
knotTorus.position.z = -25;

moon.position.z = 30;
moon.position.setX(-10);

avatar.position.z = -5;
avatar.position.x = 2;

// camera movement

function moveCamera() {
    const t = document.body.getBoundingClientRect().top;
    moon.rotation.x += 0.05;
    moon.rotation.y += 0.075;
    moon.rotation.z += 0.05;
  
    avatar.rotation.y += 0.01;
    avatar.rotation.z += 0.01;
  
    camera.position.z = t * -0.01;
    camera.position.x = t * -0.0002;
    camera.rotation.y = t * -0.0002;
  }
  
  document.body.onscroll = moveCamera;
  moveCamera();

  function animate() {
    requestAnimationFrame(animate);
  
    torus.rotation.x += 0.01;
    torus.rotation.y += 0.005;
    torus.rotation.z += 0.01;
  
    knotTorus.rotation.x += 0.005;
    knotTorus.rotation.y += 0.0001;
    knotTorus.rotation.z += 0.001;
  
    moon.rotation.x += 0.005;

    
    moon.rotation.x += 0.005;
  
    // controls.update();
  
    renderer.render(scene, camera);
  }
  
  animate();
  