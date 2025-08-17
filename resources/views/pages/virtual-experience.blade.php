@extends('layouts.app')

@section('content')
<div id="viewer" style="width: 100vw; height: 100vh;"></div>

<!-- ✅ Tambah style untuk mini-map -->
<style>
    .blueprint-container {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 200px;
        height: 200px;
        border: 2px solid #fff;
        border-radius: 10px;
        overflow: hidden;
        background: rgba(0,0,0,0.6);
        z-index: 999;
    }
    .blueprint-container img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        cursor: pointer;
    }
</style>

<!-- ✅ Import Map -->
<script type="importmap">
{
    "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three/build/three.module.js",
        "@photo-sphere-viewer/core": "https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.module.js",
        "@photo-sphere-viewer/markers-plugin": "https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/markers-plugin/index.module.js"
    }
}
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/markers-plugin/index.css">

<script type="module">
    import { Viewer } from '@photo-sphere-viewer/core';
    import { MarkersPlugin } from '@photo-sphere-viewer/markers-plugin';

    const viewer = new Viewer({
        container: document.querySelector('#viewer'),
        panorama: '{{ asset("images/360/lab-pplg.jpg") }}',
        plugins: [
            [MarkersPlugin, { markers: [] }]
        ],
        navbar: false,
        mousewheel: true,
        moveInertia: true,
        touchmoveTwoFingers: true,
        mousewheelCtrlKey: false,
    });

    const markers = viewer.getPlugin(MarkersPlugin);

    // ✅ Tambah marker di panorama (contoh: pintu ke lantai 2)
    markers.addMarker({
        id: 'to-floor2',
        longitude: 0.5, // posisi X di panorama
        latitude: 0.1,  // posisi Y di panorama
        image: 'https://cdn-icons-png.flaticon.com/512/25/25694.png', // icon panah
        width: 32,
        height: 32,
        tooltip: 'Naik ke Lantai 2',
    });

    // ✅ Event kalau marker diklik
    markers.on('select-marker', (e, marker) => {
        if (marker.id === 'to-floor2') {
            viewer.setPanorama('{{ asset("images/360/lab-floor2.jpg") }}');
        }
    });

    // ✅ Tambah blueprint di pojok kanan atas
    const container = document.createElement('div');
    container.className = 'blueprint-container';
    container.innerHTML = `
        <img src="{{ asset('images/blueprint/floor1.png') }}" id="map-floor1">
    `;
    document.body.appendChild(container);

    // Ganti panorama saat klik blueprint
    document.getElementById('map-floor1').addEventListener('click', () => {
        viewer.setPanorama('{{ asset("images/360/lab-floor1.jpg") }}');
    });
</script>
@endsection
