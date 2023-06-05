const homeLink = document.getElementById('homeLink');
const subscriptionsLink = document.getElementById('subscriptionsLink');
const libraryLink = document.getElementById('libraryLink');
const watchLaterLink = document.getElementById('watchLaterLink');

// Define the route handlers
function homeHandler() {
    console.log("Home route");
    window.location.href = window.location.pathname;
}

function subscriptionsHandler() {
    console.log("Subscriptions route");
    window.location.href = "subscription.html";
}

function libraryHandler() {
    console.log("Library route");
}

function watchLaterHandler() {
    console.log("Watch Later route");
}

// Handle route changes
function handleRoute(route) {
    switch (route) {
        case '/':
            homeHandler();
            break;
        case '/subscriptions':
            subscriptionsHandler();
            break;
        case '/library':
            libraryHandler();
            break;
        case '/watch-later':
            watchLaterHandler();
            break;
        default:
            // Handle unknown routes or show a 404 page
            console.log("Unknown route");
            break;
    }
}

// Add event listeners for route changes
homeLink.addEventListener('click', function(event) {
    event.preventDefault();
    const route = homeLink.getAttribute('data-route');
    handleRoute(route);
});

subscriptionsLink.addEventListener('click', function(event) {
    event.preventDefault();
    const route = subscriptionsLink.getAttribute('data-route');
    handleRoute(route);
});

libraryLink.addEventListener('click', function(event) {
    event.preventDefault();
    const route = libraryLink.getAttribute('data-route');
    handleRoute(route);
});

watchLaterLink.addEventListener('click', function(event) {
    event.preventDefault();
    const route = watchLaterLink.getAttribute('data-route');
    handleRoute(route);
});
