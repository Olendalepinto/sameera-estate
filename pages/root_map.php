<h1 class="text-2xl font-semibold mb-6 text-center">Route Map & Location</h1>

<div class="flex flex-col md:flex-row items-start justify-center gap-6">

    <!-- Left Section: Route Map Image -->
    <div class="border border-gray-300 rounded-lg shadow-lg p-4 w-full md:w-1/2">
        <h2 class="text-lg font-semibold mb-3 text-center">Route Map</h2>
        <img src="assets/images/route1.png" alt="Route Map" class="w-full rounded-lg">
    </div>

    <!-- Right Section: Video (Above) + Google Map (Below) -->
    <div class="flex flex-col w-full md:w-1/2 space-y-6">

        <!-- Video Section -->
        <div class="border border-gray-300 rounded-lg shadow-lg p-4">
            <h2 class="text-lg font-semibold mb-3 text-center">Inside Sarayu Enclave</h2>
            <video class="w-full rounded-lg" controls>
                <source src="assets/videos/sarayu.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Google Map Section -->
        <div class="border border-gray-300 rounded-lg shadow-lg p-4">
            <h2 class="text-lg font-semibold mb-3 text-center">Location on Google Maps</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3851.341416495269!2d76.95731397511669!3d15.139583285413144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTXCsDA4JzIyLjUiTiA3NsKwNTcnMzUuNiJF!5e0!3m2!1sen!2sin!4v1737794314869!5m2!1sen!2sin" 
                class="w-full h-[300px] rounded-lg" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

</div>
