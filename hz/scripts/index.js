const menu = document.getElementById('menuDiv');
const menuElement = [home,profile,faq,dashboard,blogHome]

function navigationMenu(){

const menuElement,[i] = document.createElement("div");

home.innerHTML = '<a href="index.html">Home page</a>';
profile.innerHTML = '<a href="profile.html">About me</a>';
faq.innerHTML = '<a href="faq.html">FAQ</a>';
dashboard.innerHTML = '<a href="dashboard.html">Dashboard</a>';
blogHome.innerHTML = '<a href="blog_home.html">Blog</a>'

menu.appendChild(home);
menu.appendChildd(profile);
menu.appendChild(faq);
menu.appendChild(dashboard);
menu.appendChild(blogHome);
}

window.addEventListener('', navigationMenu);

function navStatic(){
    if (document.documentElement.scrollTop = 200) {
        document.getElementById("navigation").className = "header, fixed";
    } else {
        document.getElementById('navigation').className = "header";
    }
}
window.onscroll = navStatic();