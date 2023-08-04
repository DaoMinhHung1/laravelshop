const imgchinh = document.querySelector('.imgchinh');

imgchinh.addEventListener('mousemove', function (e) {
    const { left, top, width, height } = this.getBoundingClientRect();
    const mouseX = e.clientX - left; // Mouse X position relative to the image
    const mouseY = e.clientY - top; // Mouse Y position relative to the image

    // Calculate the percentage position of the mouse within the image
    const percentX = (mouseX / width) * 100;
    const percentY = (mouseY / height) * 100;

    // Apply the zoom effect based on the mouse position
    this.style.transform = `scale(2) translate(-${percentX}%, -${percentY}%)`;
});

imgchinh.addEventListener('mouseleave', function () {
    // Reset the transform when the mouse leaves the image
    this.style.transform = 'scale(1) translate(0, 0)';
});