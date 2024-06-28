<!doctype html>
<html lang="en">

<head>
    <title>User Dashboard | Bevis Africa</title>
    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="edit-profile.php">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#applications">My Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apply">Apply Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Banner -->
    <section class="p-0 h-500 h-lg-700 bg-parallax" style="background:url(assets/images/new/bevis-main.jpg) no-repeat 65% 0%; background-size:cover;">
        <div class="container h-100">
            <div class="row justify-content-between align-items-center h-100">
                <div class="col-md-8 mb-7">
                    <h1 class="display-4 fw-bold">Welcome to Your Dashboard</h1>
                    <p class="lead">Manage your applications and access the voluntary carbon market with ease.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- My Applications -->
    <section id="applications">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center mb-4">My Applications</h3>
                    <div class="table-responsive-sm">
                        <table class="table table-lg table-noborder table-striped">
                            <thead class="all-text-white bg-grad">
                                <tr>
                                    <th scope="col">Application ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2023-06-01</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>2023-05-15</td>
                                    <td>Approved</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>2023-04-30</td>
                                    <td>Rejected</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Now -->
    <section>
        <div class="container">
            <div class="row" id="apply">
                <div class="col-12 col-md-8 mx-auto">
                    <h3 class="text-center mb-4">Apply Now</h3>
                    <div class="form mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-start mb-2">Country</p>
                                <span class="form-group"><input type="text" class="form-control" placeholder="Enter your country"></span>
                            </div>
                            <div class="col-md-6">
                                <p class="text-start mb-2">Phone Number</p>
                                <span class="form-group"><input type="tel" class="form-control" placeholder="Enter your phone number"></span>
                            </div>
                        </div>
                        <div>
                            <p class="text-start mb-2">I represent</p>
                            <span class="form-group">
                                <select class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Fisherman">Fisherman</option>
                                    <option value="Pastoralist">Pastoralist</option>
                                    <option value="Artisanal Miner">Artisanal Miner</option>
                                    <option value="Other">Other</option>
                                </select>
                            </span>
                        </div>
                        <div>
                            <p class="text-start mb-2">Farming Type</p>
                            <span class="form-group">
                                <select class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Crop Farming">Crop Farming</option>
                                    <option value="Livestock Farming">Livestock Farming</option>
                                    <option value="Mixed Farming">Mixed Farming</option>
                                    <option value="Other">Other</option>
                                </select>
                            </span>
                        </div>
                        <div>
                            <p class="text-start mb-2">Type of Carbon Offset</p>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="soilCarbon">
                                        <label class="form-check-label" for="soilCarbon">Soil Carbon</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="forestCarbon">
                                        <label class="form-check-label" for="forestCarbon">Forest Carbon</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer, CTA -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>
</body>

</html>