// Get all image elements in the gallery
const images = document.querySelectorAll('.gallery .image');

// Get all preview divs and images
const previewDivs = document.querySelectorAll('#preview1, #preview2, #preview3, #preview4, #preview5');
const previewImages = document.querySelectorAll('#preview-image1, #preview-image2, #preview-image3, #preview-image4, #preview-image5');

// Add event listener to each image element
images.forEach((image, index) => {
  image.addEventListener('click', e => {
    // Get the source URL of the clicked image
    const src = e.currentTarget.querySelector('img').src;

    // Set the source URL of the corresponding preview image
    previewImages[index].src = src;

    // Show the corresponding full-screen preview
    const preview = previewDivs[index];
    preview.style.display = 'flex';
  });
});

// Add event listener to the close button
const closePreview = document.getElementById('close-preview');
closePreview.addEventListener('click', () => {
  // Hide all preview divs
  previewDivs.forEach(preview => {
    preview.style.display = 'none';
  });
});
