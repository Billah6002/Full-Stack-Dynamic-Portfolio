document.write("HELLO");
tags = document.querySelector(".nav-links").children;
for (i = 0; i < tags.length; i++) {
    tags[i].addEventListener("click", function (params) {
        alert(params.target.innerHTML);
    });
}

document.querySelectorAll("a").forEach( anchor =>{
    anchor.onclick = function () {
        // console.log(anchor.innerHTML);
        res = prompt(anchor.innerText);
        console.log(res);
    }
})

document.querySelectorAll(".title").forEach( anchor =>{
    anchor.onclick = function () {
        anchor.innerHTML = `
        <h3>
            <a href="#"> This is JS </a>
            <p> This is assigned dynamically </p>
        </h3>
        `;
        anchor.style.color = "yello";
        anchor.style.backgroundColor = "#87CEEB"; // sky-blue
        anchor.style.borderRadius = "10px";
        anchor.style.padding = "20px";

        avatar = document.getElementById("avatar");
        avatar.src = "https://image-optimizer.cyberriskalliance.com/unsafe/1920x0/https://files.cyberriskalliance.com/wp-content/uploads/2024/12/121324_robots.jpg"
    };
});

document.getElementById("cardid").addEventListener("click", function (params) {
    // alert(params.target.innerHTML);
    // console.log(params.target);
    document.getElementById("nxt").appendChild(params.target.innerHTML);
});