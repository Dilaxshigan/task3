document.getElementById('add-field-btn').addEventListener('click', function() {
    // Clone the first input group
    const originalGroup = document.querySelector('.d-flex');
    const newGroup = originalGroup.cloneNode(true);

    // Clear the input values in the new group
    newGroup.querySelectorAll('input').forEach(input => input.value = '');

    // Append the new group to the form container
    document.getElementById('form-container').appendChild(newGroup);
});

document.querySelectorAll('.file-input').forEach(input => {
    input.addEventListener('change', function() {
        const box = this.closest('.upload-box');
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                box.style.backgroundImage = `url(${e.target.result})`;
                box.style.backgroundSize = 'cover';
                box.style.backgroundPosition = 'center';
                box.textContent = '';
            }
            reader.readAsDataURL(file);
        }
    });
});

function confirmation(ev) {
    ev.preventDefault();

    swal({
        title: "Product Successfully Updated",
        text: "Details saved",
        icon: "success",
        buttons: true,
        dangerMode: true,
    }).then((willCancel) => {
        if (willCancel) {
            ev.target.closest('form').submit(); 
        }
    });
}
