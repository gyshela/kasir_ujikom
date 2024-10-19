<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    ?>
    <meta http-equiv="refresh" content="0;url=../login.php">
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f5f5f5;
                font-family: 'Merriweather', serif;
                color: #333;
            }

            .team-section {
                text-align: center;
                padding: 35px 0;
                background-color: #ffffff;
                border-top: 4px solid #c5a880;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                margin: 20px 0;
            }

            .team-section h2 {
                font-size: 48px;
                margin-bottom: 50px;
                color: #2b2b2b;
                letter-spacing: 2px;
                position: relative;
                display: inline-block;
            }

            .team-section h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 100px;
                height: 3px;
                background-color: #c5a880;
            }

            .team-container {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                gap: 20px;
                padding: 0 15px;
            }

            .team-member {
                position: relative;
                width: calc(20% - 20px);
                background-color: #fff;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                overflow: hidden;
                border: 2px solid #c5a880;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }

            .team-member img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 15px 15px 0 0;
                transition: transform 0.3s ease;
            }

            .team-member:hover img {
                transform: scale(1.05);
            }

            .member-info {
                padding: 15px;
                background: rgba(0, 0, 0, 0.8);
                background: linear-gradient(to top, black, transparent);
                color: #f8f8f8;
                text-align: center;
                border-radius: 0 0 15px 15px;
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                transition: opacity 0.3s ease;
                opacity: 0;
            }

            .team-member:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .team-member:hover .member-info {
                opacity: 1;
            }

            .member-name {
                display: block;
                padding: 10px 0;
                font-size: 18px;
                font-weight: bold;
                color: #fff;
                transition: color 0.3s ease;
            }

            .member-info a {
                color: inherit;
                text-decoration: none;
                font-weight: 300;
                border-bottom: 1px solid transparent;
                transition: border-color 0.4s ease;
            }

            .member-info a:hover {
                border-color: inherit;
            }

            /* Mobile responsiveness */
            @media (max-width: 800px) {
                .team-member {
                    width: calc(50% - 20px);
                }
            }

            @media (max-width: 500px) {
                .team-member {
                    width: 100%;
                }
            }

            header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
            }

            main {
                margin-top: 60px;
            }
        </style>
    </head>

    <body>
        <?php include "../header.php" ?>
        <main class="container border py-3">
            <section class="team-section"><br>
                <h2>Aplikasi Ini Dibuat Oleh:</h2>

                <div class="team-container">
                    <div class="team-member">
                        <img src="../img/gisel.jpeg" alt="Gyshela Shalwa Moulidyna">
                        <div class="member-info">
                            <span class="member-name">Gyshela Shalwa Moulidyna</span>
                            <a href="https://www.instagram.com/iniazell_/?igsh=MWd5aDgzMXpyNGV6dw=="
                                target="_blank">Instagram</a>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="../img/dea.jpeg" alt="Dea Sri Puspita">
                        <div class="member-info">
                            <span class="member-name">Dea Sri Puspita</span>
                            <a href="https://www.instagram.com/deyaasr_?igsh=MTRyaWY1OG1qNHZ6eA=="
                                target="_blank">Instagram</a>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="../img/dian.jpeg" alt="Siti Nurdianti">
                        <div class="member-info">
                            <span class="member-name">Siti Nurdianti</span>
                            <a href="https://www.instagram.com/delyn.r?igsh=dXBoc2J2bGhzNGtr" target="_blank">Instagram</a>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="../img/pazri.jpeg" alt="Pazri Taufikillah">
                        <div class="member-info">
                            <span class="member-name">Pazri Taufikillah</span>
                            <a href="https://www.instagram.com/pzri_tqlh?igsh=djZrZW55bDhnYnho"
                                target="_blank">Instagram</a>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="../img/fardhan.jpeg" alt="Fardhan Arka Badillah">
                        <div class="member-info">
                            <span class="member-name">Fardhan Arka Badillah</span>
                            <!-- <a href="https://www.instagram.com/frdhn.28?igsh=c2xjd2RnbDRwZnk=" target="_blank">Instagram</a> -->
                        </div>
                    </div>

                </div>
                <br>
                <h4>12 RPL 3</h4>
                <h3>SMK NEGERI 1 KADIPATEN</h3>
            </section>
        </main>

        <?php include "../footer.php" ?>

        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php } ?>