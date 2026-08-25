<?php include __DIR__ . '/../layouts/layouts.php'; ?>

<main class="flex-shrink-0">

    <!-- Navigation -->
    <?php include __DIR__ . '/../inc/nav.php'; ?>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container px-5">

            <div class="bg-light rounded-4 py-5 px-4 px-md-5">

                <!-- Header -->
                <div class="text-center mb-5">

                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <h1 class="fw-bolder">
                        Get in touch
                    </h1>

                    <p class="lead fw-normal text-muted mb-0">
                        Let's work together!
                    </p>

                </div>

                <!-- Contact Card -->
                <div class="row justify-content-center">

                    <div class="col-lg-8 col-xl-7">

                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                            <div class="card-body p-4 p-md-5 bg-white">

                                <h3 class="fw-bold mb-4">
                                    Send me a message
                                </h3>

                                <form action="../handeler/employee/create_contact.php" method="POST">
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-semibold"> Your Name </label>
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control form-control-lg rounded-3">
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold"> Email Address </label>
                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            class="form-control form-control-lg rounded-3">
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label fw-semibold">
                                            Phone Number
                                        </label>
                                        <input
                                            type="tel"
                                            name="phone"
                                            id="phone"
                                            class="form-control form-control-lg rounded-3">
                                    </div>
                                    <!-- Message -->
                                    <div class="mb-4">
                                        <label for="message" class="form-label fw-semibold"> Message </label>
                                        <textarea
                                            name="message"
                                            id="message"
                                            rows="5"
                                            class="form-control rounded-3"></textarea>
                                    </div>

                                    <!-- Submit -->
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-lg w-100 rounded-3 fw-semibold">Send Message
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

<!-- Footer -->
<?php include __DIR__ . '/../inc/footer.php'; ?>