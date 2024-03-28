console.log(document.getElementById('lampswitch').addEventListener('change', function() {
    if (this.checked) {
        // Redirect to another page when light is turned on
        window.location.href = 'about3.php'}}));

// document.getElementById('searchInput').addEventListener('input', function() {
// let searchValue = this.value.toLowerCase();
// let items = document.querySelectorAll('.item');
        
// items.forEach(function(item) {
//     let text = item.textContent.toLowerCase();
//     if (text.includes(searchValue)) {
//         item.style.display = 'block';
//     } else {
//         item.style.display = 'none';
//     }
//     });
//         });
        