// Define a function to fetch room images from Domain 1 API
function fetchRoomImages() {
    fetch('https://krishpada.com/software/api/slider.php')
        .then((response) => response.json())
        .then((data) => {
            // Call a function to generate slider items
            generateSliderItems(data);
        })
        .catch((error) => {
            console.error('Error fetching room images:', error);
        });
}

// Define a function to generate slider items based on room images
function generateSliderItems(images) {
    const sliderContainer = document.getElementById('roomSlider');

    images.forEach((imagePath) => {
        const sliderItem = document.createElement('div');
        sliderItem.classList.add('item');

        sliderItem.innerHTML = `
            <li>
                <div class="slider-info banner-view bg bg2" style="background-image: url(${imagePath});">
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-info-bg">
                                <h5>Your slider content here</h5>
                                <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        `;

        sliderContainer.appendChild(sliderItem);
    });
}

// Fetch room images and generate slider items when the page loads
window.onload = function () {
    fetchRoomImages();
};
