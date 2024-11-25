// Load content into #div_content
content('about.html');

function content(html_link) {
    fetch(html_link)
        .then(response => response.text())
        .then(html => {
            document.getElementById('div_content').innerHTML = html;
        })
        .catch(err => console.error('Error loading content:', err));
}

// Event listener for search_key keyup event
document.getElementById('search_key').addEventListener('keyup', function(e) {
    if (e.key === 'Enter' || e.KeyBoardEvent === 13) {
        const searchKey = document.getElementById('search_key').value;
        if (searchKey) {
            fetch('search_result.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `search_key=${encodeURIComponent(searchKey)}`
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('div_content').innerHTML = html;
            })
            .catch(err => console.error('Error during search:', err));
        }
    }
});

// Toggle class for online help button
document.querySelector('.btn-online-help').addEventListener('click', function() {
    document.querySelector('.div-online-help').classList.toggle('show');
});

// Toggle class for FAQs button
document.querySelector('.btn-faqs').addEventListener('click', function() {
    document.querySelector('.div-faqs').classList.toggle('show');
});

// Toggle classes for online help tabs
document.querySelector('.online-help-tab1-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab1-subitem').classList.toggle('show');
    document.querySelector('.first').classList.toggle('rotate');
});

document.querySelector('.online-help-tab2-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab2-subitem').classList.toggle('show');
    document.querySelector('.second').classList.toggle('rotate');
});

document.querySelector('.online-help-tab3-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab3-subitem').classList.toggle('show');
    document.querySelector('.third').classList.toggle('rotate');
});



document.querySelector('.online-help-tab3-1-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab3-1-sub-subitem').classList.toggle('show');
    document.querySelector('.third-1').classList.toggle('rotate');
});

document.querySelector('.online-help-tab3-2-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab3-2-sub-subitem').classList.toggle('show');
    document.querySelector('.third-2').classList.toggle('rotate');
});



document.querySelector('.online-help-tab4-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab4-subitem').classList.toggle('show');
    document.querySelector('.fourth').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-subitem').classList.toggle('show');
    document.querySelector('.fifth').classList.toggle('rotate');
});



document.querySelector('.online-help-tab5-1-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-1-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-1').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-2-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-2-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-2').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-3-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-3-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-3').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-4-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-4-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-4').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-5-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-5-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-5').classList.toggle('rotate');
});

document.querySelector('.online-help-tab5-6-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab5-6-sub-subitem').classList.toggle('show');
    document.querySelector('.fifth-6').classList.toggle('rotate');
});





// Toggle active class on nav items
document.querySelectorAll('nav ul li').forEach(navitem => {
    navitem.addEventListener('click', function() {
        // Remove active class from all menu items
        document.querySelectorAll('nav ul li').forEach(item => {
            item.classList.remove('active');
        });        
        // Add active class to the clicked menu item
        this.classList.add('active');
    });
});

document.querySelectorAll('.subitem').forEach(item => {
    item.addEventListener('click', function() {
        // Remove active class from all menu items
        document.querySelectorAll('.subitem').forEach(subitem => {
            subitem.classList.remove('active-subitem');
        });        
        // Add active class to the clicked menu item
        this.classList.add('active-subitem');
    });
});

document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('click', function() {
        // Remove active class from all menu items
        document.querySelectorAll('.subitem').forEach(subitem => {
            subitem.classList.remove('active-subitem');
        });
    });
});