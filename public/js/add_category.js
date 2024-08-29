document.querySelectorAll('.file-input').forEach(input => {
    input.addEventListener('change', function() {
        const box = this.closest('.upload-box');
        const file = this.files[0];
        const deleteBtn = box.querySelector('.delete-btn');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                box.style.backgroundImage = `url(${e.target.result})`;
                box.style.backgroundSize = 'cover';
                box.style.backgroundPosition = 'center';
                box.textContent = '';
                box.classList.add('has-image'); 
                box.appendChild(deleteBtn); 
                deleteBtn.classList.remove('d-none'); 
            }
            reader.readAsDataURL(file);
        }
    });

    const deleteBtn = input.closest('.upload-box').querySelector('.delete-btn');
    deleteBtn.addEventListener('click', function() {
        const box = this.closest('.upload-box');
        box.style.backgroundImage = ''; 
        box.classList.remove('has-image'); 
        box.textContent = '+';
        input.value = ''; 
        deleteBtn.classList.add('d-none'); 
    });
});

function confirmation(ev) {
    ev.preventDefault();

    swal({
        title: "Product Successfully Added",
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
