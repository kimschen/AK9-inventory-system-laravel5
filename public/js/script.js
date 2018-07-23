function previewImage() {
	var image = document.querySelector('img');
	var imageFile = document.querySelector("div.container input[type='file']").files[0];
	var reader = new FileReader();

	reader.onloadend = function () {
		image.src = reader.result;
	}

	if (imageFile) {
		reader.readAsDataURL(imageFile);
	} else {
		image.src = "";
	}
}
