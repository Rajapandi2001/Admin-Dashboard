<section class="relative">
    <span class="block w-full h-[20vw] -mb-px bg-secondary-lighter u-mask-clip-1"></span>
    <div class="relative bg-secondary-lighter text-white pb-24">
        <img src="images/svg/raga.svg" alt="decoration"
            class="hidden lg:block absolute -left-6 xl:left-0 top-[-9vw] xl:top-[-12vw] 2xl:top-[-10vw] w-32"
            loading="lazy">
        <div class="relative container-sm md:top-[-8vw] md:mb-[-8vw] space-y-12 md:space-y-20">
            <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                <p class="h2 text-line grow-0">Make an enquiry</p>
                <div class="prose text-base font-normal max-w-2xl mx-auto">
                    <p>Contact us, we'd love to hear from you!</p>
                    <figure
                        class="overflow-hidden group w-[calc(100%+3rem)] translate-x-[-1.5rem] -rotate-2 u-mask-image"
                        style="border-width:0px;border-style:solid;margin:0px;"></figure>
                </div>
            </div>
            <div class="c-form-enquiry">
                <div>
                    <form id="enquiryForm" action="includes/submit.php" method="POST" enctype="multipart/form-data"
                        accept-charset="utf-8">
                        <!-- Bootstrap Alert -->
                        <div id="formAlert" class="alert d-none mt-3" role="alert"></div>
                        <!-- Page 1 -->
                        <div id="fui-contactUs-yowphc-p-1283" data-index="0" data-id="1283" data-fui-page>
                            <!-- Title and Name -->
                            <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="2">
                                <!-- Title Field -->
                                <div class="px-4 flex-1 text-base font-normal c-input-sm" data-field-handle="title1"
                                    data-field-type="single-line-text">
                                    <div>
                                        <label class="block mb-2.5 text-primary h5"
                                            for="fui-contactUs-yowphc-fields-title1">Title</label>
                                        <div>
                                            <input type="text" id="fui-contactUs-yowphc-fields-title1" required
                                                class="c-input" name="fields[title1]" value=""
                                                data-fui-id="contactUs-title1">
                                        </div>
                                    </div>
                                </div>

                                <!-- Name Fieldset -->
                                <div class="px-4 flex-1 text-base font-normal" data-field-handle="name1"
                                    data-field-type="name">
                                    <fieldset>
                                        <legend class="block mb-2.5 text-primary h5" data-fui-sr-only>Name</legend>
                                        <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                            data-fui-field-count="2">
                                            <!-- First Name -->
                                            <div class="px-4 flex-1 text-base font-normal" data-field-handle="firstName"
                                                data-field-type="single-line-text">
                                                <div>
                                                    <label class="block mb-2.5 text-primary h5"
                                                        for="fui-contactUs-yowphc-fields-name1-firstName">First name
                                                        <span class="text-primary" aria-hidden="true">*</span></label>
                                                    <div>
                                                        <input type="text"
                                                            id="fui-contactUs-yowphc-fields-name1-firstName" required
                                                            class="c-input" name="fields[name1][firstName]" required
                                                            autocomplete="given-name"
                                                            data-fui-id="contactUs-name1-firstName">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Last Name -->
                                            <div class="px-4 flex-1 text-base font-normal" data-field-handle="lastName"
                                                data-field-type="single-line-text">
                                                <div>
                                                    <label class="block mb-2.5 text-primary h5"
                                                        for="fui-contactUs-yowphc-fields-name1-lastName">Last name <span
                                                            class="text-primary" aria-hidden="true">*</span></label>
                                                    <div>
                                                        <input type="text"
                                                            id="fui-contactUs-yowphc-fields-name1-lastName" required
                                                            class="c-input" name="fields[name1][lastName]" required
                                                            autocomplete="family-name"
                                                            data-fui-id="contactUs-name1-lastName">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                <div class="px-4 flex-1 text-base font-normal" data-field-handle="emailAddress"
                                    data-field-type="email">
                                    <div>
                                        <label class="block mb-2.5 text-primary h5"
                                            for="fui-contactUs-yowphc-fields-emailAddress">Email address <span
                                                class="text-primary" aria-hidden="true">*</span></label>
                                        <div>
                                            <input type="email" id="fui-contactUs-yowphc-fields-emailAddress" required
                                                class="c-input" name="fields[emailAddress]" required
                                                autocomplete="email" data-fui-id="contactUs-emailAddress">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                <div class="px-4 flex-1 text-base font-normal" data-field-handle="subject"
                                    data-field-type="subject">
                                    <div>
                                        <label class="block mb-2.5 text-primary h5"
                                            for="fui-contactUs-yowphc-fields-subject">Subject<span class="text-primary"
                                                aria-hidden="true">*</span></label>
                                        <div>
                                            <input type="text" id="fui-contactUs-yowphc-fields-subject" required
                                                class="c-input" name="fields[subject]" required autocomplete="subject"
                                                data-fui-id="contactUs-subject">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Enquiry Textarea Field -->
                            <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                <div class="px-4 w-full text-base font-normal" data-field-handle="enquiryMessage"
                                    data-field-type="multi-line-text">
                                    <div>
                                        <label class="block mb-2.5 text-primary h5"
                                            for="fui-contactUs-yowphc-fields-enquiryMessage">Enquiry <span
                                                class="text-primary" aria-hidden="true">*</span></label>
                                        <div>
                                            <textarea id="fui-contactUs-yowphc-fields-enquiryMessage" class="c-input"
                                                name="fields[enquiryMessage]" rows="5" required
                                                data-fui-id="contactUs-enquiryMessage"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Submit Button -->
                            <div class="text-center mt-6">
                                <button type="submit" class="c-button order-10">Send enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div id="response"></div>
                <p class="text-center text-xs mt-8">This site is protected by reCAPTCHA and the Google <a
                        href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
                <!-- ✅ jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- ✅ SweetAlert2 -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                $('#enquiryForm').on('submit', function(e) {
                    e.preventDefault();

                    const form = this;
                    const formData = new FormData(form);

                    // Manual validation
                    let isValid = true;
                    let errorMsg = '';

                    $(form)
                        .find('[required]')
                        .each(function() {
                            if (!$(this).val().trim()) {
                                isValid = false;
                                const label = $(this).closest('div').find('label').text().replace('*', '')
                                    .trim();
                                errorMsg += `${label} is required.\n`;
                            }
                        });

                    if (!isValid) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Validation Error',
                            text: errorMsg || 'Please fill all required fields'
                        });
                        return; // stop submission
                    }

                    // ✅ Proceed with AJAX
                    $.ajax({
                        url: 'includes/submit.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Your enquiry has been submitted.',
                                confirmButtonColor: '#28a745'
                            });
                            form.reset();
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'There was a problem submitting your form.',
                                confirmButtonColor: '#d33'
                            });
                            console.error(xhr.responseText);
                        }
                    });
                });
                </script>


            </div>
        </div>
    </div>
</section>