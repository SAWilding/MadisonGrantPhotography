<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madison Grant Photo | Home</title>

    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/styles.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/large.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/home.css">
    <link rel="shortcut icon" href="/MadisonGrantPhoto/public/favicon.ico" type="image/png">

    <script type="module" src="/MadisonGrantPhoto/scripts/index.js"></script>
</head>

<body>
    <header id="main-header">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/header.php"?>
    </header>
    <main>
        <section class="hero">
            <img src="http://via.placeholder.com/800x400" alt="hero image" class="hero-img">
            <h1 class="heading">Madison Grant Photo</h1>
        </section>
        <section class="about">
            <h2>About Me</h2>
            <div class="about-grid">
                <img src="http://via.placeholder.com/400x600" alt="Photo of Madison" class="about-img">
                <p class="about-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque non quia expedita quam laborum! Sequi vitae temporibus provident nisi cupiditate, quasi in ex,
                    velit et eveniet corrupti a, repellendus laborum. Lorem ipsum dolor sit, amet consectetur
                    adipisicing
                    elit.
                    Harum nihil ratione maiores laborum iusto explicabo error alias architecto. Nesciunt perferendis
                    blanditiis
                    eaque,
                    consectetur tempora molestiae consequuntur explicabo fugiat quo enim. Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Neque ratione voluptates numquam tenetur rerum. Modi eaque reiciendis
                    minima, maiores omnis porro tempora animi dignissimos consectetur sint recusandae dolorem nihil
                    doloribus!
                </p>

            </div>
        </section>
        <section class="testimonials">
            <h2>Testimonials</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <img src="http://via.placeholder.com/400x600" alt="testimonial 3">
                    <p class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia earum
                        culpa, consequatur aspernatur
                        similique quis? Earum perferendis, voluptatum, optio praesentium nihil pariatur corrupti quidem
                        beatae, labore autem facere voluptates excepturi!</p>
                </div>
                <div class="testimonial-card">
                    <img src="http://via.placeholder.com/400x600" alt="testimonial 3">
                    <p class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia earum
                        culpa, consequatur aspernatur
                        similique quis? Earum perferendis, voluptatum, optio praesentium nihil pariatur corrupti quidem
                        beatae, labore autem facere voluptates excepturi!</p>
                </div>
                <div class="testimonial-card">
                    <img src="http://via.placeholder.com/400x600" alt="testimonial 3">
                    <div class="overlay">
                        <p class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia
                            earum
                            culpa, consequatur aspernatur
                            similique quis? Earum perferendis, voluptatum, optio praesentium nihil pariatur corrupti
                            quidem
                            beatae, labore autem facere voluptates excepturi! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Maiores recusandae asperiores, dicta rerum, corporis ipsa obcaecati
                            voluptas,
                            illo assumenda iure soluta odio eum. Accusantium nemo numquam illum vero dolorem vitae.</p>

                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer id="main-footer">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/footer.php"?>

    </footer>
</body>

</html>