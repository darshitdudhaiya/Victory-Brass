function createProduct() {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('product-id', $('#product').val());
    formData.append('productName', $('#product-name').val());
    formData.append('productSize', $('#product-size').val());
    formData.append('productMaterial', $('#product-material').val());
    formData.append('productThreads', $('#product-threads').val());
    formData.append('productPlating', $('#product-plating').val());
    formData.append('productDescription', $('#product-description').val());
    formData.append('categoryName', $('#category-name').val());


    let files = $('#images')[0].files;
    for (let i = 0; i < files.length; i++) {
        formData.append('images[]', files[i]);
    }
    $.ajax(
        {
            method: 'POST',
            url: '../Products/create.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../products', 1000);
                }
            }
        });

    return false;
}

function editProduct(id) {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('id', id);
    formData.append('product-id', $('#product').val());
    formData.append('product-name', $('#product-name').val());
    formData.append('product-size', $('#product-size').val());
    formData.append('product-material', $('#product-material').val());
    formData.append('product-threads', $('#product-threads').val());
    formData.append('product-plating', $('#product-plating').val());
    formData.append('product-description', $('#product-description').val());

    let files = $('#images')[0].files;
    for (let i = 0; i < files.length; i++) {
        formData.append('images[]', files[i]);
    }
    $.ajax(
        {
            method: 'POST',
            url: '../products/edit.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../products', 1000);
                }
            }
        });

    return false;
}
function productImagesSelected() {
    
    let files = $('#images')[0].files;
    let html = '';

    for (let i = 0; i < files.length; i++) {
        let image = URL.createObjectURL(files[i]);
        html += `<img src="${image}" class="img-preview" />`;
    }
    
    $('.custom-file-label').text(`${files.length} files selected.`);
    $('#img-preview-list').html(html);
}

function clearServiceImages() {
    $('#images').val('');
    $('.custom-file-label').text(`Select images...`);
    $('#img-preview-list').html('');
}
function showDeleteServiceConfirmation(id) {
    $('#btn-yes').attr('data-id', id);
    $('#modal-delete').modal('show');
}

function deleteProduct() {
    let id = $('#btn-yes').attr('data-id');
    if (id == null)
        return;

    window.location.href = '../products/delete.php?id=' + id;
}