// Load content into #div_content
content('about.html');

function content(html_link) {
    fetch(html_link)
        .then(response => response.text())
        .then(html => {
            document.getElementById('div_content').innerHTML = html;
        })
        .then(initializeVideoControls)
        .then(search_links_keyup)
        .then(search_links_click)
        .catch(err => console.error('Error loading content:', err));
}

// Event listener for search_key keyup event
function search_links_keyup() {
    document.getElementById('search_key').addEventListener('keyup', function(e) {
        if (e.key == 'Enter' || e.KeyBoardEvent == 13) {
            const searchKey = document.getElementById('search_key').value;
            if (searchKey) {
                fetch('issp_agency_focal/agency_focal_search_result.php', {
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
}

// Event listener for search_key click event
function search_links_click() {
    document.getElementById('search_icon').addEventListener('click', function() {
        const searchKey = document.getElementById('search_key').value;
        if (searchKey) {
            fetch('issp_agency_focal/agency_focal_result.php', {
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
    });
}

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



document.querySelector('.online-help-tab2-1-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab2-1-sub-subitem').classList.toggle('show');
    document.querySelector('.second-1').classList.toggle('rotate');
});

document.querySelector('.online-help-tab2-2-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab2-2-sub-subitem').classList.toggle('show');
    document.querySelector('.second-2').classList.toggle('rotate');
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

document.querySelector('.online-help-tab3-3-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab3-3-sub-subitem').classList.toggle('show');
    document.querySelector('.third-3').classList.toggle('rotate');
});

document.querySelector('.online-help-tab3-4-subitem').addEventListener('click', function() {
    document.querySelector('.online-help-tab3-4-sub-subitem').classList.toggle('show');
    document.querySelector('.third-4').classList.toggle('rotate');
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



document.querySelector('.online-help-tab6-btn').addEventListener('click', function() {
    document.querySelector('.online-help-tab6-subitem').classList.toggle('show');
    document.querySelector('.sixth').classList.toggle('rotate');
});


// Toggle active class on nav items
document.querySelectorAll('nav ul li').forEach(navItem => {
    navItem.addEventListener('click', function() {
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



// Adding functionality to video play and pause button
function initializeVideoControls() {

    const video = document.getElementsByClassName("custom-video_video");
    let i;

    for (i = 0; i < video.length; i++) {

        video[i].addEventListener("click", function() {
            const controls = this.nextElementSibling;
            if (controls.innerHTML == "▶") {
                controls.innerHTML = "| |";
                this.play();
            }
            else {
                controls.innerHTML = "▶";
                this.pause();
            }
        });

        video[i].addEventListener("play", function() {
            const controls = this.nextElementSibling;
            if (!this.paused) {
                controls.style.display = "none";
            }
        });

        video[i].addEventListener("mouseout", function() {
            const controls = this.nextElementSibling;
            if (!this.paused) {
                controls.style.display = "none";
            }
        });

        video[i].addEventListener("mouseover", function() {
            const controls = this.nextElementSibling;
            controls.style.display = "flex";
        });

    }
}