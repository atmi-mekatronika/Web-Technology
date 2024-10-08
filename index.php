<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Company Website</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />

    <link rel="stylesheet" href="asset/css/mystyle.css" />

</head>

<body>
    <!-- Bagian Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <a class="navbar-brand" href="#">
                <img class="header-logo" src="asset/img/logo.png" />
                My Company
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#hero">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#services">Services</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bagian Hero -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Welcome to My Company!</h1>
                    <p>
                        Fusce tincidunt ultrices urna, non suscipit nisl rutrum et. Cras interdum arcu id varius
                        venenatis. Nam vitae scelerisque ante, non scelerisque lectus. Proin accumsan eget massa vel
                        euismod. Morbi sagittis risus neque, sit amet finibus nibh porta quis.
                    </p>
                    <a class="btn btn-danger" href="#" onclick="testFunction()">More &raquo;</a>
                </div>
                <div class="col-sm-4">
                    <img class="hero-logo" src="asset/img/logo.png" />
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Services -->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <img class="section-img" src="asset/img/services2.png" />
                <h2>Services</h2>
            </div>
            <div class="row">
                <?php include("connectdb.php"); ?>

                <?php
                    $sql = "SELECT nama, keterangan FROM services";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-sm-4">';
                        echo '<h4>' . $row["nama"] . '</h4>';
                        echo '<p>' .$row["keterangan"] . '</p>';
                        echo '</div>';

                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>

            </div>
        </div>
    </section>

    <!-- Bagian About -->
    <section id="about">
        <div class="container">
            <div class="section-header">
                <img class="section-img" src="asset/img/about2.png" />
                <h2>About</h2>
            </div>
            <div>
                <p> Quisque aliquet in orci ut pharetra. Curabitur consequat tempor egestas. Mauris molestie nisi eget
                    pharetra blandit.
                    Proin fermentum aliquam nisl, accumsan interdum ante rutrum nec.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4>
                        Vission
                    </h4>
                    <p>
                        Pellentesque sed faucibus sapien, bibendum scelerisque nisl. Curabitur molestie urna sagittis
                        ante imperdiet, quis sagittis sapien dapibus. Proin fringilla elementum consequat. Aliquam
                        viverra velit id tortor pharetra, rhoncus bibendum massa bibendum. Curabitur pretium hendrerit
                        libero eget efficitur. Quisque a sem aliquet, rutrum magna sed, ultricies sapien. Fusce sed elit
                        imperdiet, pulvinar lacus eget, imperdiet tortor.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4>
                        Performance
                    </h4>
                    <p>
                        Pellentesque sed faucibus sapien, bibendum scelerisque nisl. Curabitur molestie urna sagittis
                        ante imperdiet, quis sagittis sapien dapibus. Proin fringilla elementum consequat. Aliquam
                        viverra velit id tortor pharetra, rhoncus bibendum massa bibendum. Curabitur pretium hendrerit
                        libero eget efficitur. Quisque a sem aliquet, rutrum magna sed, ultricies sapien. Fusce sed elit
                        imperdiet, pulvinar lacus eget, imperdiet tortor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Contact -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <img class="section-img" src="asset/img/contact2.png" />
                <h2>Contact Us</h2>
            </div>

            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" required />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" class="form-control" placeholder="Enter your email" required />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="sr-only">Message</label>
                            <textarea class="form-control" placeholder="Enter your message" rows="5"
                                required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send &raquo;</button>
            </form>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer id="footer" class="fixed-bottom bg-info">
        <div class="container">
            <div class="text-center">
                &copy;2024 All rights reserved - RPL Lab.
            </div>
        </div>
    </footer>



    <!-- Bootstrap JS -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/myscript.js"></script>
</body>

</html>