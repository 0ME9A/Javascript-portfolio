$(document).ready(function () {
    var menu_text = $(".menu-link-list")
    var select = $(".hamburger");
    const filter_div = $(".filter");
    const background_img = $(".background-img-box");
    var window_W = window.innerWidth;
    var window_H = window.innerHeight;
    const menu_parent = $(".menu-parent");
    const content_parent = $(".content-parent");
    var menu_text_box = $(".menu-text-box");
    var content_page = $(".content-page");
    const blur_back = $(".filter");
    const page_indicator = $(".page-indicator")
    const brand = [(document.querySelector("#brand-text")), (document.querySelector("#brand-icon"))]

    var card_width;
    var card_height;
    var cards_data_active = true;
    var coords_x;
    var coords_y;




    var press_content_data = ["title", "thumbnail", "source", "blog", "date_time"]
    press_content_data[1] = "img/img5.jpg";
    console.log(press_content_data)


    function set_property_false(id) {
        $(".icon-parent")[id].lastElementChild.firstElementChild.firstElementChild.style.color = "#4B4B4B"
        $("#page-0" + (id + 1))[0].style.opacity = 0;
        $(".icon-parent")[id].firstElementChild.style.transform = "translateY(-50%) scale(0)";
        $("#menu-link-0" + (id + 1))[0].firstChild.style.color = "#4B4B4B";
    }

    function goback() {
        cards_data_active = true;
        setTimeout(() => {
            $(".cards-data")[0].style.left = coords_x + "px";
            $(".cards-data")[0].style.top = coords_y + "px";
            $(".cards-data")[0].style.height = 0;
            $(".cards-data")[0].style.width = 0;
            $(".cards-data")[0].style.opacity = 0;


            if ($(".cards-data-cover")[0].style.opacity == 0) {
                $("#active-card-title")[0].innerHTML = '';
                $("#active-card-thumbnail")[0].src = '';
                $("#active-card-blog")[0].innerHTML = '';
            }
        }, 1000);
    }

    function brand_click() {
        const page_indicator = $(".page-indicator")
        const filter_div = $(".filter");


        for (let i = 0; i < page_indicator.length; i++) {
            const element = page_indicator[i];
            if (element.checked == true) {
                element.checked = false;
                filter_div[0].style.opacity = 0;


                set_property_false(i)
                goback()
            }
        }
    }



    brand[0].onclick = function () {
        brand_click()
    }
    brand[1].onclick = function () {
        brand_click()
    }



    var content_page_width = ($(".content-page")[0].clientWidth);
    select.click(function () {

        if (menu_text[0].style.left == "0px") {
            menu_text[0].style.left = "-500px";
            background_img[0].style.left = "0px";
            content_parent[0].style.width = (window_W - 120) + "px"
            content_page_width = window_W - 120;
            $(".cards-data")[0].style.width = content_page_width + "px";
            $(".cards-data")[0].style.left = "120px";
            cards_details()
        } else {
            menu_text[0].style.left = "0";
            background_img[0].style.left = "300px";
            content_parent[0].style.width = (window_W - 500) + "px"
            content_page_width = window_W - 500;
            $(".cards-data")[0].style.width = content_page_width + "px";
            $(".cards-data")[0].style.left = "500px";
            cards_details()
        }
    });

    for (let i = 0; i < menu_text_box.length; i++) {
        const element = menu_text_box[i];
        const element2 = ($(".icon-parent")[i])
        const menu_links = [element.firstChild, element2.lastElementChild]

        for (let menu_links_val = 0; menu_links_val < menu_links.length; menu_links_val++) {
            const element = menu_links[menu_links_val];
            element.onclick = function menu_links_fun() {
                if (this.parentElement.id == "menu-link-01" || this.parentElement.id == "icon-parent-home") {
                    page_indicator[0].checked = true;
                    goback()
                } else if (this.parentElement.id == "menu-link-02" || this.parentElement.id == "icon-parent-work") {
                    page_indicator[1].checked = true;
                } else if (this.parentElement.id == "menu-link-03" || this.parentElement.id == "icon-parent-contect") {
                    page_indicator[2].checked = true;
                    goback()
                } else if (this.parentElement.id == "menu-link-04" || this.parentElement.id == "icon-parent-profile") {
                    page_indicator[3].checked = true;
                    goback()
                }


                for (let k = 0; k < page_indicator.length; k++) {
                    const element = page_indicator[k];
                    if (element.checked == true) {
                        $("#menu-link-0" + (k + 1))[0].firstChild.style.color = "#E28272";
                        $("#page-0" + (k + 1))[0].style.opacity = 1;
                        $("#page-0" + (k + 1))[0].style.zIndex = 5;
                        blur_back[0].style.opacity = 1;
                        $(".icon-parent")[k].firstElementChild.style.transform = "translateY(-50%) scale(2.5)";
                        $(".icon-parent")[k].lastElementChild.firstElementChild.firstElementChild.style.color = "#E28272"

                    } else {
                        $("#page-0" + (k + 1))[0].style.zIndex = 1;
                        set_property_false(k)
                    }
                }

            }
        }
    }


    var zindex = 10;

    function cards_details() {
        var pos_y = 0;
        var check_card_pos = setTimeout(() => {
            var card_box = $(".card-box");
            for (let i = 0; i < card_box.length; i++) {
                const element = card_box[i];
                element.style.transition = ".3s";
                card_height = element.clientHeight;
                card_width = element.clientWidth;
                if (element.id != "active_article") {

                    if (i % 2 != 0) {
                        element.style.top = pos_y + "px";
                        pos_y = pos_y + card_height;

                    } else {
                        element.style.top = pos_y + "px";
                        element.style.right = 0
                    }
                }
            }
            clearInterval(check_card_pos)
        }, 300);

    }
    cards_details()



    setInterval(() => {
        if (cards_data_active == false) {
            $(".goback-parent")[0].style.opacity = 1;
            content_parent[0].style.opacity = 0;
            background_img[0].firstElementChild.src = press_content_data[1];
            setTimeout(() => {
                $(".cards-data-cover")[0].style.opacity = 1;
                $(".cards-data-cover")[0].style.overflow = "auto";

                if ($(".cards-data-cover")[0].style.opacity == 1) {
                    $("#active-card-title")[0].innerHTML = press_content_data[0];
                    $("#active-card-thumbnail")[0].src = press_content_data[1];
                    $("#active-card-link")[0].href = press_content_data[2];
                    $("#active-card-blog")[0].innerHTML = press_content_data[3];
                    $("#active-card-date")[0].innerHTML = press_content_data[4];
                }
            }, 500);

        } else {
            setTimeout(() => {
                content_parent[0].style.opacity = 1;
                $(".goback-parent")[0].style.opacity = 0
                $(".cards-data-cover")[0].style.overflow = "hidden";
                $(".cards-data-cover")[0].style.opacity = 0;
                $(".cards-data-cover")[0].scrollTop = 0;

                background_img[0].firstElementChild.src = "background.jpg";
            }, 500);

        }
        if ($("#contect")[0].checked == true) {
            var blink_mail_background = Math.round(Math.random() * 14);
            $(".background-text-styled")[blink_mail_background].style.opacity = 0;
            setTimeout(() => {
                $(".background-text-styled")[blink_mail_background].style.opacity = 1;

            }, 300);
        }


        if ($(".cards-data-cover")[0].children[1].clientHeight > window_H / 1.5) {
            $(".cards-data-cover")[0].onscroll = function () {
                if (this.scrollTop == 0) {
                    this.lastElementChild.style.opacity = 0;
                } else {
                    this.lastElementChild.style.opacity = 1;
                }
            }
        } else {
            $(".cards-data-cover")[0].lastElementChild.style.opacity = 1;
        }



    }, 500);

    $(".card-box img").click(function (e) {
        e.preventDefault();

        $(".cards-data")[0].style.width = content_page_width + "px";
        $(".cards-data")[0].style.height = ($(".content-page")[0].clientHeight) + "px";
        $(".cards-data")[0].style.top = "0%";
        $(".cards-data")[0].style.left = "0";

        cards_data_active = false;
        if (menu_text[0].style.left == "0px") {
            $(".cards-data")[0].style.width = content_page_width + "px";
            $(".cards-data")[0].style.left = "500px";
        } else {
            $(".cards-data")[0].style.width = content_page_width + "px";
            $(".cards-data")[0].style.left = "120px";
        }
        for (let index = 0; index < press_content_data.length; index++) {
            console.log(press_content_data[index] = this.parentElement.lastElementChild.children[index].innerText)
            // console.log()
        }

    });


    $(".goback").click(goback);







    $(".content-container").mousemove(function (event) {
        if (cards_data_active == true) {
            var x = event.clientX;
            var y = event.clientY;
            coords_x = x;
            coords_y = y;
            var coords = "X coords: " + (x) + ", Y coords: " + (y);
            $(".cards-data")[0].style.left = (x - 0) + "px";
            $(".cards-data")[0].style.top = (y - 0) + "px";
            $(".cards-data")[0].style.opacity = 1;
        }
    });




    var styled_text = $(".background-of-text")
    const contect_mail = $("#contect-mail");

    styled_text.mousemove(function (event) {
        if ($("#contect")[0].checked == true) {
            let coords_x;
            let coords_y;
            var x = event.clientX;
            var y = event.clientY;
            coords_y = y - 25;
            if (menu_text[0].style.left == "0px") {
                coords_x = x - 250;
            } else {
                coords_x = x - 0;
            }

            contect_mail[0].style.top = (coords_y - contect_mail[0].clientHeight) + "px";
            contect_mail[0].style.left = (coords_x - contect_mail[0].clientWidth) + "px";
        }


    });



});