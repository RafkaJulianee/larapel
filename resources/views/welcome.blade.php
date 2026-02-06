<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vintage Landing Page</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&family=Special+Elite&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-color: #fdf6e3;
            --card-bg: #eee8d5;
            --text-color: #586e75;
            --heading-color: #b58900;
            --border-color: #93a1a1;
            --accent-color: #cb4b16;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Special Elite', cursive;
            margin: 0;
            padding: 0;
            background-image: 
                linear-gradient(rgba(181, 137, 0, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(181, 137, 0, 0.05) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        h1, h2, h3 {
            font-family: 'Rye', serif;
            color: var(--heading-color);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        /* Header Section */
        header {
            text-align: center;
            padding: 4rem 1rem;
            border-bottom: 2px dashed var(--heading-color);
            margin-bottom: 3rem;
            background: radial-gradient(circle, var(--card-bg) 0%, var(--bg-color) 70%);
        }

        header h1 {
            font-size: 3.5rem;
            margin: 0;
            text-shadow: 2px 2px 0px rgba(0,0,0,0.1);
        }

        header p {
            font-size: 1.2rem;
            margin-top: 1rem;
            font-style: italic;
        }

        /* Grid Layout */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .grid-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding-bottom: 4rem;
        }

        /* Card Style */
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 2rem;
            text-align: center;
            box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 1px solid var(--border-color);
            pointer-events: none;
        }

        .card:hover {
            transform: translate(-4px, -4px);
            box-shadow: 12px 12px 0px rgba(0,0,0,0.15);
        }

        /* Icons */
        .icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background-color: var(--bg-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--heading-color);
        }

        .icon-wrapper svg {
            width: 40px;
            height: 40px;
            fill: var(--accent-color);
        }

        /* Button */
        .btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 1rem 2.5rem;
            background-color: var(--accent-color);
            color: #fff;
            text-decoration: none;
            font-family: 'Rye', serif;
            font-size: 1.2rem;
            border-radius: 4px;
            box-shadow: 4px 4px 0px rgba(0,0,0,0.2);
            transition: all 0.2s;
        }

        .btn:hover {
            background-color: #d33682;
            box-shadow: 2px 2px 0px rgba(0,0,0,0.2);
            transform: translate(2px, 2px);
        }

        footer {
            text-align: center;
            padding: 2rem;
            border-top: 2px dashed var(--heading-color);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>The Retro Collective</h1>
            <p>Timeless Designs for the Modern Web</p>
            <a href="#" class="btn">Explore Collection</a>
        </div>
    </header>

    <main class="container">
        <div class="grid-wrapper">
            <!-- Item 1 -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2l-5.5 9h11z"/>
                        <circle cx="17.5" cy="17.5" r="4.5"/>
                        <rect x="3" y="13" width="9" height="9"/>
                    </svg>
                </div>
                <h2>Geometric</h2>
                <p>Perfectly balanced shapes and structures for a solid foundation.</p>
            </div>

            <!-- Item 2 -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <h2>Handcrafted</h2>
                <p>Made with love and attention to detail, just like the old days.</p>
            </div>

            <!-- Item 3 -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                    </svg>
                </div>
                <h2>Community</h2>
                <p>Join a group of like-minded individuals who appreciate quality.</p>
            </div>

            <!-- Item 4 -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                    </svg>
                </div>
                <h2>Secure</h2>
                <p>Built to last and protect what matters most to you.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 The Retro Collective. Est. London.</p>
    </footer>

</body>
</html>