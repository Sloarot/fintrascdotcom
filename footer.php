    <!-- Get in Touch CTA Section -->
    <?php if (!isset($current_page) || $current_page !== 'contact'): ?>
        <section class="py-20 text-white relative overflow-hidden" style="background: linear-gradient(135deg, #22517E 0%, #2A659E 60%, #3279BE 100%);">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
                </div>
            </div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Get in Touch</h2>
                <p class="text-xl text-blue-100 mb-4">
                    If you would like to discuss a project or request a quote, feel free to contact me.
                </p>
                <p class="text-lg text-blue-200 mb-10">
                    All enquiries and documents are treated confidentially.
                </p>
                <a href="contact.php"
                    class="inline-flex items-center px-8 py-4 bg-white font-bold text-lg rounded-lg hover:bg-blue-50 transition duration-300 shadow-xl hover:shadow-2xl" style="color: #22517E;">
                    <span>Contact me to discuss your translation needs</span>
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </section>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2026 FINTRASC. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
    </body>

    </html>