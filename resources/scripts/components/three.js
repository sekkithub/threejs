import * as THREE from 'three';
import ee from './ee';

let scene;
let camera;
let renderer;

let light;

let geometry;
let material;
let mesh;

let mouseX = 0;
let mouseY = 0;

function onWindowResize() {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.render(scene, camera);
}

function rotateScene(deltaX, deltaY) {
  mesh.rotation.y += deltaX / 2000;
  mesh.rotation.x += deltaY / 1000;
}

function onDocumentMouseMove(event) {
  const deltaX = event.clientX - mouseX;
  const deltaY = event.clientY - mouseY;
  mouseX = event.clientX;
  mouseY = event.clientY;
  rotateScene(deltaX, deltaY);
}

function initThree() {
  scene = new THREE.Scene();
  scene.background = new THREE.Color(0x1a1a1a);

  light = new THREE.DirectionalLight(0xffffff);
  light.position.set(1, 1, 1);
  scene.add(light);

  light = new THREE.DirectionalLight(0xffffff);
  light.position.set(-1, -1, -1);
  scene.add(light);

  light = new THREE.AmbientLight(0x222222);
  scene.add(light);

  camera = new THREE.PerspectiveCamera(1.4, window.innerWidth / window.innerHeight, 5, 100000);
  camera.position.z = 1400;

  geometry = new THREE.TorusGeometry(10, 3, 16, 50);
  material = new THREE.MeshPhongMaterial({ color: 0x828282, wireframe: true });

  mesh = new THREE.Mesh(geometry, material);
  mesh.rotation.x = -(Math.PI * 0.2);
  mesh.rotation.y = -(Math.PI * 0.2);
  scene.add(mesh);

  renderer = new THREE.WebGLRenderer();
  renderer.setSize(window.innerWidth, window.innerHeight);

  const container = document.getElementById('three');
  document.body.appendChild(container);

  container.appendChild(renderer.domElement);

  window.addEventListener('resize', onWindowResize, false);
  document.addEventListener('mousemove', onDocumentMouseMove, false);
}

function render() {
  camera.lookAt(scene.position);
  renderer.render(scene, camera);
}

function animate() {
  requestAnimationFrame(animate);
  render();
}

function init() {
  initThree();
  animate();
}

ee.addListener('init', init);
