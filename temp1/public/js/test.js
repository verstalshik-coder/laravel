document.querySelector(".delete").onclick = function () {
    document.location.href = "http://127.0.0.1:8000/test/group/"
        + document.querySelector('.active').id;
}

document.querySelector('.title').innerHTML = "Группа "
    + document.querySelector('.active').id;

let temp = document.getElementsByClassName("te");
for (let i = 0; i < temp.length; i++){
    if(temp[i].id !== document.querySelector('.active').id) temp[i].style.display = "none";
}

let groups = document.getElementsByClassName("groups");

for (let i = 0; i < groups.length; i++) {
    groups[i].onclick = function () {
        document.querySelector('.title').innerHTML = "Группа " + groups[i].id;
        document.querySelector('.active').classList.remove("active");
        groups[i].classList.toggle("active");

        for (let i = 0; i < temp.length; i++){
            if(temp[i].id !== document.querySelector('.active').id)
                temp[i].style.display = "none";
            else temp[i].style.display = "flex";
        }
    }
}
