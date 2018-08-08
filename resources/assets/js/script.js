function previewImage() {
	var image = document.querySelector('img');
	var imageFile = document.querySelector("div.container input[type='file']").files[0];
	var reader = new FileReader();

	// FileReader reads uploaded file
	// Replace image src value to reader's result
	reader.onloadend = function () {
		image.src = reader.result;
	}

	// Read uploaded file as URL, otherwise set image src to empty
	if (imageFile) {
		reader.readAsDataURL(imageFile);
	} else {
		image.src = "";
	}
}
