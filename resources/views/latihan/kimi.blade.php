<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Black Hole Interaktif</title>
    <style>
        /* === CSS STYLING === */
        * {
            box-sizing: border-box;
            user-select: none; /* Mencegah seleksi teks saat interaksi drag */
        }

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #05050a; /* Fallback warna solid */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        /* Canvas diset full screen */
        canvas {
            display: block;
            width: 100vw;
            height: 100vh;
            /* Background gradien radial untuk memberikan efek depth/kedalaman */
            background: radial-gradient(circle at center, #100820 0%, #05050a 60%, #000000 100%);
        }

        /* Container untuk UI Controls */
        #ui-container {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(15, 15, 25, 0.6);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
            z-index: 10;
        }

        /* State jika UI disembunyikan */
        #ui-container.hidden {
            transform: translateX(-350px);
        }

        h1 {
            font-size: 1.2rem;
            margin: 0 0 15px 0;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #b088ff;
            text-shadow: 0 0 10px rgba(176, 136, 255, 0.5);
        }

        .control-group {
            margin-bottom: 15px;
        }

        .control-group label {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            margin-bottom: 5px;
            color: #ccc;
        }

        /* Styling untuk Sliders */
        input[type=range] {
            width: 100%;
            -webkit-appearance: none;
            background: rgba(255, 255, 255, 0.1);
            height: 6px;
            border-radius: 3px;
            outline: none;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #b088ff;
            cursor: pointer;
            box-shadow: 0 0 10px #b088ff;
        }

        /* Styling untuk Buttons */
        .btn-group {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            background: rgba(176, 136, 255, 0.1);
            border: 1px solid rgba(176, 136, 255, 0.4);
            color: #fff;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.2s;
        }

        button:hover {
            background: rgba(176, 136, 255, 0.3);
            box-shadow: 0 0 15px rgba(176, 136, 255, 0.4);
        }

        button.danger {
            background: rgba(255, 60, 60, 0.1);
            border-color: rgba(255, 60, 60, 0.4);
        }
        button.danger:hover {
            background: rgba(255, 60, 60, 0.3);
            box-shadow: 0 0 15px rgba(255, 60, 60, 0.4);
        }

        /* Tombol Toggle UI */
        #toggle-ui {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(15, 15, 25, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            z-index: 5;
            display: none; /* Muncul hanya di layar kecil atau saat panel disembunyikan */
        }

        /* Info Text */
        .info-text {
            font-size: 0.75rem;
            color: #888;
            margin-top: 15px;
            text-align: center;
            line-height: 1.4;
        }
        
        .mode-badge {
            display: block;
            text-align: center;
            font-size: 0.8rem;
            color: #00ffff;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 600px) {
            #toggle-ui { display: block; }
            #ui-container { transform: translateX(-350px); top: 60px; }
            #ui-container.show { transform: translateX(0); }
        }
    </style>
</head>
<body>

    <!-- Tombol untuk HP/Layar kecil -->
    <button id="toggle-ui">⚙️ Menu</button>

    <!-- UI Controls -->
    <div id="ui-container">
        <h1>Black Hole Core</h1>
        <span class="mode-badge" id="mode-display">Bentuk: Spiral</span>

        <div class="control-group">
            <label><span>Jumlah Partikel</span> <span id="val-particles">3000</span></label>
            <input type="range" id="slider-particles" min="500" max="10000" step="500" value="3000">
        </div>

        <div class="control-group">
            <label><span>Gravitasi (Scroll)</span> <span id="val-gravity">15</span></label>
            <input type="range" id="slider-gravity" min="1" max="50" step="1" value="15">
        </div>

        <div class="control-group">
            <label><span>Kecepatan Rotasi</span> <span id="val-rotation">2.5</span></label>
            <input type="range" id="slider-rotation" min="0.1" max="10" step="0.1" value="2.5">
        </div>

        <div class="control-group">
            <label><span>Ukuran Event Horizon</span> <span id="val-size">40</span></label>
            <input type="range" id="slider-size" min="10" max="150" step="5" value="40">
        </div>

        <div class="btn-group">
            <button id="btn-supernova">💥 Supernova Mode</button>
            <button id="btn-chaos" class="danger">🌪️ Chaos Mode</button>
            <button id="btn-reset">🌌 Reset Universe</button>
        </div>

        <div class="info-text">
            Mouse Move = Tarik Partikel<br>
            Mouse Click & Drag = Deformasi / Gelombang<br>
            Double Click = Ubah Bentuk Galaksi<br>
            Scroll = Ubah Kekuatan Gravitasi
        </div>
    </div>

    <!-- Canvas Utama -->
    <canvas id="canvas"></canvas>

    <!-- === JAVASCRIPT === -->
    <script>
        /**
         * SETUP KANVAS DAN KONTEKS
         */
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d', { alpha: false }); // Optimasi performa

        let width, height, centerX, centerY;

        function resizeCanvas() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            centerX = width / 2;
            centerY = height / 2;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        /**
         * KONFIGURASI GLOBAL (Dikontrol via UI)
         */
        const config = {
            particleCount: 3000,
            gravity: 15,          // Konstanta G pseudo
            rotationSpeed: 2.5,   // Kecepatan putar dasar
            blackHoleSize: 40,    // Radius dimana partikel tertelan
            friction: 0.98,       // Gesekan angkasa (mencegah kecepatan tak terbatas)
            trailLength: 0.15,    // Alpha dari background untuk efek motion blur
            isChaos: false
        };

        // Daftar bentuk formasi galaksi
        const formations = ['Spiral', 'Galaxy', 'Sphere', 'Wave', 'Vortex'];
        let currentFormationIndex = 0;

        /**
         * STATE INTERAKSI MOUSE & SENTUHAN
         */
        const mouse = {
            x: centerX,
            y: centerY,
            isActive: false,
            isDown: false,
            radius: 250 // Jangkauan pengaruh mouse
        };

        /**
         * CLASS PARTICLE
         * Mengelola fisika, posisi, dan warna per individu partikel
         */
        class Particle {
            constructor() {
                this.reset(true);
            }

            // Fungsi untuk mengatur ulang partikel ke batas luar
            reset(randomizeRadius = false) {
                const angle = Math.random() * Math.PI * 2;
                // Jarak awal dari pusat
                const radius = randomizeRadius 
                    ? Math.random() * (Math.max(width, height)) 
                    : Math.max(width, height) * (0.8 + Math.random() * 0.4); // Spawn di luar layar
                
                this.x = centerX + Math.cos(angle) * radius;
                this.y = centerY + Math.sin(angle) * radius;
                
                // Kecepatan awal
                this.vx = 0;
                this.vy = 0;
                
                // Offset spesifik untuk bentuk formasi
                this.baseAngle = angle;
                this.randomOffset = Math.random();
            }

            update() {
                // Jarak absolut partikel ke pusat Black Hole
                let dx = centerX - this.x;
                let dy = centerY - this.y;
                let distSq = dx * dx + dy * dy;
                // Mencegah pembagian dengan nol dengan memberikan nilai minimum
                if (distSq < 1) distSq = 1; 
                let dist = Math.sqrt(distSq);

                // CEK EVENT HORIZON: Jika terlalu dekat, tertelan dan respawn
                if (dist < config.blackHoleSize) {
                    this.reset();
                    return;
                }

                // 1. GAYA GRAVITASI PUSAT (Inverse Square Law: F = G / r^2)
                // Dikali 1000 agar nilai config.gravity di UI bisa kecil (1-50)
                let forceGravity = (config.gravity * 1000) / distSq;
                let ax = (dx / dist) * forceGravity;
                let ay = (dy / dist) * forceGravity;

                // 2. GAYA ROTASI (Kecepatan tangensial)
                // Vektor tegak lurus (perpendicular) dari vektor arah ke pusat
                let tangX = -dy / dist;
                let tangY = dx / dist;
                
                // Variasi berdasarkan formasi yang dipilih
                let currentRotSpeed = config.rotationSpeed;
                if (formations[currentFormationIndex] === 'Galaxy') {
                    // Berputar lebih cepat di lengan galaksi tertentu
                    currentRotSpeed += Math.sin(this.baseAngle * 4) * 1.5;
                } else if (formations[currentFormationIndex] === 'Wave') {
                    // Efek gelombang naik turun
                    ay += Math.sin(this.x * 0.01) * 0.5;
                    ax += Math.cos(this.y * 0.01) * 0.5;
                } else if (formations[currentFormationIndex] === 'Vortex') {
                    // Tersedot lebih cepat ke dalam (spiral ketat)
                    ax *= 1.5;
                    ay *= 1.5;
                    currentRotSpeed *= 1.2;
                }

                // Semakin dekat ke pusat, kecepatan rotasi sudut meningkat (hukum Kepler pseudo)
                let rotationForce = (currentRotSpeed * 10) / Math.sqrt(dist);

                // 3. INTERAKSI MOUSE
                let mx = 0, my = 0;
                let mdx = mouse.x - this.x;
                let mdy = mouse.y - this.y;
                let mDistSq = mdx * mdx + mdy * mdy;

                if (mouse.isActive && mDistSq < mouse.radius * mouse.radius) {
                    let mDist = Math.sqrt(mDistSq);
                    if (mDist < 1) mDist = 1;

                    if (mouse.isDown) {
                        // REPEL / DEFORMASI BEBAS (Drag Effect / Kain Kosmik)
                        // Saat ditekan, partikel dipaksa menjauh dari kursor membentuk gelombang kejut
                        let repelForce = 3000 / mDistSq;
                        mx = -(mdx / mDist) * repelForce;
                        my = -(mdy / mDist) * repelForce;
                        
                        // Menambahkan sedikit rotasi chaotic saat ditahan
                        mx += (mdy / mDist) * (repelForce * 0.5);
                        my += -(mdx / mDist) * (repelForce * 0.5);
                    } else {
                        // ATTRACT (Tarik perlahan ke kursor saat digerakkan)
                        let attractForce = 1500 / mDistSq;
                        mx = (mdx / mDist) * attractForce;
                        my = (mdy / mDist) * attractForce;
                    }
                }

                // Chaos Mode Modifier
                if (config.isChaos) {
                    ax += (Math.random() - 0.5) * 2;
                    ay += (Math.random() - 0.5) * 2;
                }

                // MENGGABUNGKAN SEMUA GAYA KE KECEPATAN (Velocity)
                this.vx += ax + (tangX * rotationForce) + mx;
                this.vy += ay + (tangY * rotationForce) + my;

                // Menerapkan friksi/gesekan agar sistem stabil dan tidak meledak ke luar angkasa
                this.vx *= config.friction;
                this.vy *= config.friction;

                // UPDATE POSISI
                this.x += this.vx;
                this.y += this.vy;

                // HITUNG WARNA BERDASARKAN JARAK DAN KECEPATAN
                // Warna: Ungu (Luar) -> Biru (Tengah) -> Putih (Dekat Event Horizon)
                let speedSq = this.vx * this.vx + this.vy * this.vy;
                let intensity = Math.min(1, (config.blackHoleSize * 3) / dist); 
                
                let r, g, b;
                if (intensity > 0.8) {
                    // Putih panas (Event horizon edge)
                    r = 255; g = 240 + Math.random()*15; b = 255;
                } else if (intensity > 0.4) {
                    // Biru menyala
                    r = Math.floor(0 + intensity * 100);
                    g = Math.floor(150 + intensity * 100);
                    b = 255;
                } else {
                    // Ungu gelap angkasa
                    r = Math.floor(138 * (intensity + 0.2));
                    g = Math.floor(43 * (intensity + 0.2));
                    b = Math.floor(226 * (intensity + 0.4));
                }

                this.color = `rgb(${r}, ${g}, ${b})`;
                
                // Ukuran berdasarkan jarak (perspektif pseudo-3D)
                this.size = Math.max(0.5, 2.5 * intensity * (mouse.isDown ? 1.5 : 1));
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
            }
        }

        /**
         * INISIALISASI DAN RENDER LOOP
         */
        let particles = [];

        function initParticles() {
            particles = [];
            for (let i = 0; i < config.particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animate() {
            // 1. Gambar motion trail (Timpa background dengan transparansi rendah)
            ctx.globalCompositeOperation = 'source-over';
            ctx.fillStyle = `rgba(5, 5, 10, ${config.trailLength})`;
            ctx.fillRect(0, 0, width, height);

            // 2. Gambar Efek Glow Pusat Black Hole
            let bgGlow = ctx.createRadialGradient(centerX, centerY, config.blackHoleSize * 0.8, centerX, centerY, config.blackHoleSize * 5);
            bgGlow.addColorStop(0, 'rgba(0, 0, 0, 1)');          // Hitam mutlak di tengah
            bgGlow.addColorStop(0.1, 'rgba(255, 255, 255, 0.2)'); // Cincin putih tipis
            bgGlow.addColorStop(0.3, 'rgba(138, 43, 226, 0.05)'); // Cahaya ungu
            bgGlow.addColorStop(1, 'rgba(0, 0, 0, 0)');
            
            ctx.fillStyle = bgGlow;
            ctx.beginPath();
            ctx.arc(centerX, centerY, config.blackHoleSize * 5, 0, Math.PI * 2);
            ctx.fill();

            // 3. Gambar area hitam absolut (Event Horizon) di tengah
            ctx.beginPath();
            ctx.arc(centerX, centerY, config.blackHoleSize, 0, Math.PI * 2);
            ctx.fillStyle = '#000000';
            ctx.fill();
            
            // Tambahkan Shadow Blur untuk Event horizon ring
            ctx.shadowBlur = 15;
            ctx.shadowColor = '#b088ff';
            ctx.strokeStyle = 'rgba(255, 255, 255, 0.1)';
            ctx.lineWidth = 2;
            ctx.stroke();
            ctx.shadowBlur = 0; // Reset shadow untuk partikel agar performa tidak drop

            // 4. Update dan Gambar Partikel
            // Menggunakan lighter composite operation agar partikel bertumpuk menjadi lebih terang bersinar
            ctx.globalCompositeOperation = 'lighter';
            for (let i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();
            }

            requestAnimationFrame(animate);
        }

        /**
         * PENGATURAN EVENT LISTENERS MOUSE & TOUCH
         */
        
        function updateMousePos(e) {
            if(e.touches) {
                mouse.x = e.touches[0].clientX;
                mouse.y = e.touches[0].clientY;
            } else {
                mouse.x = e.clientX;
                mouse.y = e.clientY;
            }
        }

        // Mouse Move
        window.addEventListener('mousemove', (e) => {
            mouse.isActive = true;
            updateMousePos(e);
        });
        window.addEventListener('mouseout', () => { mouse.isActive = false; });

        // Touch Move
        window.addEventListener('touchstart', (e) => {
            mouse.isActive = true;
            mouse.isDown = true;
            updateMousePos(e);
        }, {passive: false});
        window.addEventListener('touchmove', (e) => {
            updateMousePos(e);
        }, {passive: false});
        window.addEventListener('touchend', () => {
            mouse.isActive = false;
            mouse.isDown = false;
        });

        // Mouse Klik & Tahan (Deformasi)
        window.addEventListener('mousedown', () => { mouse.isDown = true; });
        window.addEventListener('mouseup', () => { mouse.isDown = false; });

        // Mouse Scroll (Ubah Gravitasi)
        window.addEventListener('wheel', (e) => {
            let change = e.deltaY > 0 ? -1 : 1;
            config.gravity = Math.max(1, Math.min(50, config.gravity + change));
            
            // Sinkronkan UI
            document.getElementById('slider-gravity').value = config.gravity;
            document.getElementById('val-gravity').innerText = config.gravity;
        });

        // Double Click (Ubah Bentuk/Formasi)
        window.addEventListener('dblclick', () => {
            currentFormationIndex = (currentFormationIndex + 1) % formations.length;
            document.getElementById('mode-display').innerText = `Bentuk: ${formations[currentFormationIndex]}`;
            
            // Memberikan sedikit kejutan visual saat berganti bentuk
            particles.forEach(p => {
                p.vx += (Math.random() - 0.5) * 10;
                p.vy += (Math.random() - 0.5) * 10;
            });
        });

        /**
         * BINDING EVENT LISTENERS UI CONTROLS
         */
        const sliders = [
            { id: 'particles', prop: 'particleCount', isInt: true },
            { id: 'gravity', prop: 'gravity', isInt: true },
            { id: 'rotation', prop: 'rotationSpeed', isInt: false },
            { id: 'size', prop: 'blackHoleSize', isInt: true }
        ];

        sliders.forEach(s => {
            const el = document.getElementById(`slider-${s.id}`);
            const valEl = document.getElementById(`val-${s.id}`);
            el.addEventListener('input', (e) => {
                let val = parseFloat(e.target.value);
                if (s.isInt) val = parseInt(val);
                
                config[s.prop] = val;
                valEl.innerText = val;

                // Khusus jika jumlah partikel diubah, array harus diperbarui
                if (s.id === 'particles') {
                    if (val > particles.length) {
                        for (let i = particles.length; i < val; i++) particles.push(new Particle());
                    } else if (val < particles.length) {
                        particles.splice(val);
                    }
                }
            });
        });

        // Tombol Supernova (Ledakan keluar)
        document.getElementById('btn-supernova').addEventListener('click', () => {
            particles.forEach(p => {
                let dx = p.x - centerX;
                let dy = p.y - centerY;
                let dist = Math.sqrt(dx*dx + dy*dy) || 1;
                // Lempar ke luar dengan kecepatan tinggi
                p.vx = (dx / dist) * (Math.random() * 50 + 20);
                p.vy = (dy / dist) * (Math.random() * 50 + 20);
            });
        });

        // Tombol Chaos Mode (Toggle)
        const btnChaos = document.getElementById('btn-chaos');
        btnChaos.addEventListener('click', () => {
            config.isChaos = !config.isChaos;
            if (config.isChaos) {
                btnChaos.style.background = 'rgba(255, 60, 60, 0.6)';
                btnChaos.innerText = '🛑 Stop Chaos';
            } else {
                btnChaos.style.background = '';
                btnChaos.innerText = '🌪️ Chaos Mode';
            }
        });

        // Tombol Reset Universe
        document.getElementById('btn-reset').addEventListener('click', () => {
            initParticles();
        });

        // Toggle UI Button (Mobile / Hide)
        const uiContainer = document.getElementById('ui-container');
        document.getElementById('toggle-ui').addEventListener('click', () => {
            uiContainer.classList.toggle('hidden');
            uiContainer.classList.toggle('show');
        });

        /**
         * MULAI SIMULASI
         */
        initParticles();
        animate();

    </script>
</body>
</html>