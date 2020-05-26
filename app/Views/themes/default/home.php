<main role="main" class="container mt-6">
    <div class='row'>
        <div class='col-md-2 pb-3 category-column'>
            <div class="bg-white shadow-xs rounded slide-container overflow-hidden p-2">
                <ul class="navbar-nav mr-auto category-nav" id="navAccordion">
                    <?php foreach ($categories as $category):?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-collapse nav-link-show" href="#" id="hasSubItems"
                            data-toggle="collapse" data-target="#collapseSubItems4" aria-controls="collapseSubItems4"
                            aria-expanded="true">
                            <ion-icon name="car-sport-outline"></ion-icon>
                            <?=$category['root_name']?>
                        </a>
                        <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">

                            <h6><?=$category['down1_name']?></h6>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text"><?=$category['down2_name']?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endforeach ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class='col-md-8 px-md-0 shadow-xs slide-container'>

            <div class="box">
                
            </div>

        </div>
        <div class='col-md-2 pb-3'>
            <div class="bg-white shadow-xs rounded p-5 slide-container"></div>
        </div>
    </div>
    <script>
    $(".slide-container").children().css("background-size", "cover");
    $(".box").bgswitcher({
        images: ["<?=base_url('assets/824.jpg')?>"]
    });
    </script>
    <div class="row align-items-center mb-4">
        <div class="col-md-3">
        <div class="media p-2 rounded shadow-xs bg-white">
            <span class='offer-icon'>
            <ion-icon  src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQyMi41MTggNDIyLjUxOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDIyLjUxOCA0MjIuNTE4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNDIyLjUxMiwyMTUuNDI0YzAtMC4wNzktMC4wMDQtMC4xNTgtMC4wMDUtMC4yMzdjLTAuMTE2LTUuMjk1LTQuMzY4LTkuNTE0LTkuNzI3LTkuNTE0aC0yLjU1NGwtMzkuNDQzLTc2LjI1OA0KCWMtMS42NjQtMy4yMi00Ljk4My01LjIyNS04LjY0Ny01LjIyNmwtNjcuMzQtMC4wMTRsMi41NjktMjAuMzY0YzAuNzMzLTguMTM4LTEuNzgzLTE1LjgyMi03LjA4Ni0yMS42MzgNCgljLTUuMjkzLTUuODA0LTEyLjY4My05LjAwMS0yMC44MS05LjAwMWgtMjA5Yy01LjI1NSwwLTkuNzE5LDQuMDY2LTEwLjIyLDkuMzA4bC0yLjA5NSwxNi43NzhoMTE5LjA3OA0KCWM3LjczMiwwLDEzLjgzNiw2LjI2OCwxMy42MzQsMTRjLTAuMjAzLDcuNzMyLTYuNjM1LDE0LTE0LjM2NywxNEgxMjYuNzhjMC4wMDcsMC4wMiwwLjAxNCwwLjA0LDAuMDIxLDAuMDU5SDEwLjE2Mw0KCWMtNS40NjgsMC0xMC4wMTcsNC40MzItMTAuMTYsOS45Yy0wLjE0Myw1LjQ2OCw0LjE3Myw5LjksOS42NDEsOS45SDE2NC4wNmM3LjE2OCwxLjEwNCwxMi41MjMsNy4zMDMsMTIuMzI2LDE0LjgwOA0KCWMtMC4yMTYsOC4yNDItNy4wMzksMTQuOTI1LTE1LjI2NywxNC45OTRINTQuNjYxYy01LjUyMywwLTEwLjExNyw0LjQ3Ny0xMC4yNjIsMTBjLTAuMTQ1LDUuNTIzLDQuMjE1LDEwLDkuNzM4LDEwaDEwNS4yMDQNCgljNy4yNzMsMS4wMTMsMTIuNzM1LDcuMjYyLDEyLjUzNywxNC44NGMtMC4yMTcsOC4yODQtNy4xMDksMTUtMTUuMzkzLDE1SDM1Ljc5MnYwLjAxMUgyNS42NTFjLTUuNTIzLDAtMTAuMTE3LDQuNDc3LTEwLjI2MiwxMA0KCWMtMC4xNDUsNS41MjMsNC4yMTQsMTAsOS43MzgsMTBoOC43NTJsLTMuNDIzLDM1LjgxOGMtMC43MzQsOC4xMzcsMS43ODIsMTUuODIxLDcuMDg2LDIxLjYzN2M1LjI5Miw1LjgwNSwxMi42ODMsOS4wMDEsMjAuODEsOS4wMDENCgloNy41NUM2OS41LDMzMy44LDg3LjMsMzQ5LjM0NSwxMDkuMDczLDM0OS4zNDVjMjEuNzczLDAsNDAuMzg3LTE1LjU0NSw0NS4wNi0zNi4xMThoOTQuMjE5YzcuNjE4LDAsMTQuODMtMi45MTMsMjAuNDg2LTcuNjgyDQoJYzUuMTcyLDQuOTY0LDEyLjAyOCw3LjY4MiwxOS41MTQsNy42ODJoMS41NWMzLjU5NywyMC41NzMsMjEuMzk3LDM2LjExOCw0My4xNzEsMzYuMTE4YzIxLjc3MywwLDQwLjM4Ny0xNS41NDUsNDUuMDYtMzYuMTE4aDYuMjE5DQoJYzE2LjIwMSwwLDMwLjU2OS0xMy4xNzEsMzIuMDI5LTI5LjM2bDYuMDk0LTY3LjUwNmMwLjAwOC0wLjA5MSwwLjAwNC0wLjE4MSwwLjAxLTAuMjczYzAuMDEtMC4xMzksMC4wMjktMC4yNzUsMC4wMzMtMC40MTUNCglDNDIyLjUyLDIxNS41ODksNDIyLjUxMiwyMTUuNTA4LDQyMi41MTIsMjE1LjQyNHogTTEwOS41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA3LTExLjIxNC0yNC4zNDYtMjQuOTk5DQoJYzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMWMxMy43ODUsMCwyNC43MDYsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMTM0Ljg5LDMxOC4xMzEsMTIzLjM4MiwzMjkuMzQ1LDEwOS41OTcsMzI5LjM0NXoNCgkgTTMzMy41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA2LTExLjIxNC0yNC4zNDYtMjQuOTk5YzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMQ0KCWMxMy43ODUsMCwyNC43MDcsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMzU4Ljg5LDMxOC4xMzEsMzQ3LjM4MiwzMjkuMzQ1LDMzMy41OTcsMzI5LjM0NXogTTM5Ni40NTcsMjgyLjU4OA0KCWMtMC41Miw1Ljc2Ny01LjgyMywxMC42MzktMTEuNTgsMTAuNjM5aC02LjcyN2MtNC40NTQtMTkuNDUzLTIxLjc0NC0zMy44ODItNDIuNzIxLTMzLjg4MmMtMjAuOTc3LDAtMzkuMDIyLDE0LjQyOS00NC40OTQsMzMuODgyDQoJaC0yLjA1OWMtMi41NDIsMC00LjgxLTAuOTUzLTYuMzg5LTIuNjg1Yy0xLjU4OS0xLjc0Mi0yLjMzNy00LjExMy0yLjEwNi02LjY3NmwxMi42MDktMTM5LjY5MWwyOC45NTksMC4wMDZsLTQuNTksNTAuODUyDQoJYy0wLjczNSw4LjEzNywxLjc4LDE1LjgyMSw3LjA4MywyMS42MzdjNS4yOTIsNS44MDYsMTIuNjg1LDkuMDA0LDIwLjgxMyw5LjAwNGg1Ni4zMzhMMzk2LjQ1NywyODIuNTg4eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo='></ion-icon>
            </span>
            <p>Fast Delivery</p>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="media p-2 rounded shadow-xs bg-white">
            <span class='offer-icon'>
            <ion-icon  src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQyMi41MTggNDIyLjUxOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDIyLjUxOCA0MjIuNTE4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNDIyLjUxMiwyMTUuNDI0YzAtMC4wNzktMC4wMDQtMC4xNTgtMC4wMDUtMC4yMzdjLTAuMTE2LTUuMjk1LTQuMzY4LTkuNTE0LTkuNzI3LTkuNTE0aC0yLjU1NGwtMzkuNDQzLTc2LjI1OA0KCWMtMS42NjQtMy4yMi00Ljk4My01LjIyNS04LjY0Ny01LjIyNmwtNjcuMzQtMC4wMTRsMi41NjktMjAuMzY0YzAuNzMzLTguMTM4LTEuNzgzLTE1LjgyMi03LjA4Ni0yMS42MzgNCgljLTUuMjkzLTUuODA0LTEyLjY4My05LjAwMS0yMC44MS05LjAwMWgtMjA5Yy01LjI1NSwwLTkuNzE5LDQuMDY2LTEwLjIyLDkuMzA4bC0yLjA5NSwxNi43NzhoMTE5LjA3OA0KCWM3LjczMiwwLDEzLjgzNiw2LjI2OCwxMy42MzQsMTRjLTAuMjAzLDcuNzMyLTYuNjM1LDE0LTE0LjM2NywxNEgxMjYuNzhjMC4wMDcsMC4wMiwwLjAxNCwwLjA0LDAuMDIxLDAuMDU5SDEwLjE2Mw0KCWMtNS40NjgsMC0xMC4wMTcsNC40MzItMTAuMTYsOS45Yy0wLjE0Myw1LjQ2OCw0LjE3Myw5LjksOS42NDEsOS45SDE2NC4wNmM3LjE2OCwxLjEwNCwxMi41MjMsNy4zMDMsMTIuMzI2LDE0LjgwOA0KCWMtMC4yMTYsOC4yNDItNy4wMzksMTQuOTI1LTE1LjI2NywxNC45OTRINTQuNjYxYy01LjUyMywwLTEwLjExNyw0LjQ3Ny0xMC4yNjIsMTBjLTAuMTQ1LDUuNTIzLDQuMjE1LDEwLDkuNzM4LDEwaDEwNS4yMDQNCgljNy4yNzMsMS4wMTMsMTIuNzM1LDcuMjYyLDEyLjUzNywxNC44NGMtMC4yMTcsOC4yODQtNy4xMDksMTUtMTUuMzkzLDE1SDM1Ljc5MnYwLjAxMUgyNS42NTFjLTUuNTIzLDAtMTAuMTE3LDQuNDc3LTEwLjI2MiwxMA0KCWMtMC4xNDUsNS41MjMsNC4yMTQsMTAsOS43MzgsMTBoOC43NTJsLTMuNDIzLDM1LjgxOGMtMC43MzQsOC4xMzcsMS43ODIsMTUuODIxLDcuMDg2LDIxLjYzN2M1LjI5Miw1LjgwNSwxMi42ODMsOS4wMDEsMjAuODEsOS4wMDENCgloNy41NUM2OS41LDMzMy44LDg3LjMsMzQ5LjM0NSwxMDkuMDczLDM0OS4zNDVjMjEuNzczLDAsNDAuMzg3LTE1LjU0NSw0NS4wNi0zNi4xMThoOTQuMjE5YzcuNjE4LDAsMTQuODMtMi45MTMsMjAuNDg2LTcuNjgyDQoJYzUuMTcyLDQuOTY0LDEyLjAyOCw3LjY4MiwxOS41MTQsNy42ODJoMS41NWMzLjU5NywyMC41NzMsMjEuMzk3LDM2LjExOCw0My4xNzEsMzYuMTE4YzIxLjc3MywwLDQwLjM4Ny0xNS41NDUsNDUuMDYtMzYuMTE4aDYuMjE5DQoJYzE2LjIwMSwwLDMwLjU2OS0xMy4xNzEsMzIuMDI5LTI5LjM2bDYuMDk0LTY3LjUwNmMwLjAwOC0wLjA5MSwwLjAwNC0wLjE4MSwwLjAxLTAuMjczYzAuMDEtMC4xMzksMC4wMjktMC4yNzUsMC4wMzMtMC40MTUNCglDNDIyLjUyLDIxNS41ODksNDIyLjUxMiwyMTUuNTA4LDQyMi41MTIsMjE1LjQyNHogTTEwOS41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA3LTExLjIxNC0yNC4zNDYtMjQuOTk5DQoJYzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMWMxMy43ODUsMCwyNC43MDYsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMTM0Ljg5LDMxOC4xMzEsMTIzLjM4MiwzMjkuMzQ1LDEwOS41OTcsMzI5LjM0NXoNCgkgTTMzMy41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA2LTExLjIxNC0yNC4zNDYtMjQuOTk5YzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMQ0KCWMxMy43ODUsMCwyNC43MDcsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMzU4Ljg5LDMxOC4xMzEsMzQ3LjM4MiwzMjkuMzQ1LDMzMy41OTcsMzI5LjM0NXogTTM5Ni40NTcsMjgyLjU4OA0KCWMtMC41Miw1Ljc2Ny01LjgyMywxMC42MzktMTEuNTgsMTAuNjM5aC02LjcyN2MtNC40NTQtMTkuNDUzLTIxLjc0NC0zMy44ODItNDIuNzIxLTMzLjg4MmMtMjAuOTc3LDAtMzkuMDIyLDE0LjQyOS00NC40OTQsMzMuODgyDQoJaC0yLjA1OWMtMi41NDIsMC00LjgxLTAuOTUzLTYuMzg5LTIuNjg1Yy0xLjU4OS0xLjc0Mi0yLjMzNy00LjExMy0yLjEwNi02LjY3NmwxMi42MDktMTM5LjY5MWwyOC45NTksMC4wMDZsLTQuNTksNTAuODUyDQoJYy0wLjczNSw4LjEzNywxLjc4LDE1LjgyMSw3LjA4MywyMS42MzdjNS4yOTIsNS44MDYsMTIuNjg1LDkuMDA0LDIwLjgxMyw5LjAwNGg1Ni4zMzhMMzk2LjQ1NywyODIuNTg4eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo='></ion-icon>
            </span>
            <p>27/7 live support</p>
        </div>
        </div>
        <div class="col-md-3">
        <div class="media p-2 rounded shadow-xs bg-white">
            <span class='offer-icon'>
            <ion-icon  src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQyMi41MTggNDIyLjUxOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDIyLjUxOCA0MjIuNTE4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNDIyLjUxMiwyMTUuNDI0YzAtMC4wNzktMC4wMDQtMC4xNTgtMC4wMDUtMC4yMzdjLTAuMTE2LTUuMjk1LTQuMzY4LTkuNTE0LTkuNzI3LTkuNTE0aC0yLjU1NGwtMzkuNDQzLTc2LjI1OA0KCWMtMS42NjQtMy4yMi00Ljk4My01LjIyNS04LjY0Ny01LjIyNmwtNjcuMzQtMC4wMTRsMi41NjktMjAuMzY0YzAuNzMzLTguMTM4LTEuNzgzLTE1LjgyMi03LjA4Ni0yMS42MzgNCgljLTUuMjkzLTUuODA0LTEyLjY4My05LjAwMS0yMC44MS05LjAwMWgtMjA5Yy01LjI1NSwwLTkuNzE5LDQuMDY2LTEwLjIyLDkuMzA4bC0yLjA5NSwxNi43NzhoMTE5LjA3OA0KCWM3LjczMiwwLDEzLjgzNiw2LjI2OCwxMy42MzQsMTRjLTAuMjAzLDcuNzMyLTYuNjM1LDE0LTE0LjM2NywxNEgxMjYuNzhjMC4wMDcsMC4wMiwwLjAxNCwwLjA0LDAuMDIxLDAuMDU5SDEwLjE2Mw0KCWMtNS40NjgsMC0xMC4wMTcsNC40MzItMTAuMTYsOS45Yy0wLjE0Myw1LjQ2OCw0LjE3Myw5LjksOS42NDEsOS45SDE2NC4wNmM3LjE2OCwxLjEwNCwxMi41MjMsNy4zMDMsMTIuMzI2LDE0LjgwOA0KCWMtMC4yMTYsOC4yNDItNy4wMzksMTQuOTI1LTE1LjI2NywxNC45OTRINTQuNjYxYy01LjUyMywwLTEwLjExNyw0LjQ3Ny0xMC4yNjIsMTBjLTAuMTQ1LDUuNTIzLDQuMjE1LDEwLDkuNzM4LDEwaDEwNS4yMDQNCgljNy4yNzMsMS4wMTMsMTIuNzM1LDcuMjYyLDEyLjUzNywxNC44NGMtMC4yMTcsOC4yODQtNy4xMDksMTUtMTUuMzkzLDE1SDM1Ljc5MnYwLjAxMUgyNS42NTFjLTUuNTIzLDAtMTAuMTE3LDQuNDc3LTEwLjI2MiwxMA0KCWMtMC4xNDUsNS41MjMsNC4yMTQsMTAsOS43MzgsMTBoOC43NTJsLTMuNDIzLDM1LjgxOGMtMC43MzQsOC4xMzcsMS43ODIsMTUuODIxLDcuMDg2LDIxLjYzN2M1LjI5Miw1LjgwNSwxMi42ODMsOS4wMDEsMjAuODEsOS4wMDENCgloNy41NUM2OS41LDMzMy44LDg3LjMsMzQ5LjM0NSwxMDkuMDczLDM0OS4zNDVjMjEuNzczLDAsNDAuMzg3LTE1LjU0NSw0NS4wNi0zNi4xMThoOTQuMjE5YzcuNjE4LDAsMTQuODMtMi45MTMsMjAuNDg2LTcuNjgyDQoJYzUuMTcyLDQuOTY0LDEyLjAyOCw3LjY4MiwxOS41MTQsNy42ODJoMS41NWMzLjU5NywyMC41NzMsMjEuMzk3LDM2LjExOCw0My4xNzEsMzYuMTE4YzIxLjc3MywwLDQwLjM4Ny0xNS41NDUsNDUuMDYtMzYuMTE4aDYuMjE5DQoJYzE2LjIwMSwwLDMwLjU2OS0xMy4xNzEsMzIuMDI5LTI5LjM2bDYuMDk0LTY3LjUwNmMwLjAwOC0wLjA5MSwwLjAwNC0wLjE4MSwwLjAxLTAuMjczYzAuMDEtMC4xMzksMC4wMjktMC4yNzUsMC4wMzMtMC40MTUNCglDNDIyLjUyLDIxNS41ODksNDIyLjUxMiwyMTUuNTA4LDQyMi41MTIsMjE1LjQyNHogTTEwOS41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA3LTExLjIxNC0yNC4zNDYtMjQuOTk5DQoJYzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMWMxMy43ODUsMCwyNC43MDYsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMTM0Ljg5LDMxOC4xMzEsMTIzLjM4MiwzMjkuMzQ1LDEwOS41OTcsMzI5LjM0NXoNCgkgTTMzMy41OTcsMzI5LjM0NWMtMTMuNzg1LDAtMjQuNzA2LTExLjIxNC0yNC4zNDYtMjQuOTk5YzAuMzYxLTEzLjc4NiwxMS44Ny0yNS4wMDEsMjUuNjU1LTI1LjAwMQ0KCWMxMy43ODUsMCwyNC43MDcsMTEuMjE1LDI0LjM0NSwyNS4wMDFDMzU4Ljg5LDMxOC4xMzEsMzQ3LjM4MiwzMjkuMzQ1LDMzMy41OTcsMzI5LjM0NXogTTM5Ni40NTcsMjgyLjU4OA0KCWMtMC41Miw1Ljc2Ny01LjgyMywxMC42MzktMTEuNTgsMTAuNjM5aC02LjcyN2MtNC40NTQtMTkuNDUzLTIxLjc0NC0zMy44ODItNDIuNzIxLTMzLjg4MmMtMjAuOTc3LDAtMzkuMDIyLDE0LjQyOS00NC40OTQsMzMuODgyDQoJaC0yLjA1OWMtMi41NDIsMC00LjgxLTAuOTUzLTYuMzg5LTIuNjg1Yy0xLjU4OS0xLjc0Mi0yLjMzNy00LjExMy0yLjEwNi02LjY3NmwxMi42MDktMTM5LjY5MWwyOC45NTksMC4wMDZsLTQuNTksNTAuODUyDQoJYy0wLjczNSw4LjEzNywxLjc4LDE1LjgyMSw3LjA4MywyMS42MzdjNS4yOTIsNS44MDYsMTIuNjg1LDkuMDA0LDIwLjgxMyw5LjAwNGg1Ni4zMzhMMzk2LjQ1NywyODIuNTg4eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo='></ion-icon>
            </span>
            <p>Secure payments</p>
        </div>
        </div>
        <div class="col-md-3">
        <div class="fast-delivery p-5 rounded shadow-xs bg-white"></div>
        </div>
        
    </div>

    <div class="my-4 p-3 bg-white rounded shadow-xs">
        <h6 class="pb-2 mb-0">Recent updates</h6>
        <div class="Btc_container">
        <!--DealofDayOffers-->
        <div class="sectionX " id="onClickFilter_ScrollTo" style="margin-bottom: 0;">
            <div class="innerCard_sectionXWrap whiteBgX99 borderRounded4px ">
                <!--offerCont_wrap-->
                <div class="offerCont_wrap whiteCard_bg setBottomOffset">
                    <div class="offerUnit_Wrapper">
                        <div class="offerUnit">
                            <div class="width_ContstraX relFontX resp_LiX dummyHeight_bg innerSection">
                                <div class="contentX99_Wrapper">
                                    <!--width_ContstraX-->
                                    <ul class="offers_WrapperX99 relFontSize_util">
                                        <ul data-reactroot="" class="offers_WrapperX99 relFontSize_util">
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/intex-led3216-81-cm-32/637184242382?MID=web|17thDec|superDod7|637184242382"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/b/u/9/230x258/Intex-LED-3216-81-cm-SDL730883102-1-7a980.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Intex LED-3216 80 cm (32) HD Ready (HDR) LED
                                                                    Television</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                23999</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                12490</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">48% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 54.6px;"></div>
                                                                    </div><span class="numberRevsX">(6)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/campus-sutra-black-cotton-quilted/677758271578?MID=web|17thDec|superDod8|677758271578"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/c/g/a/230x258/Campus-Sutra-Black-Cotton-Quilted-SDL638477211-1-306e1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Campus Sutra Black Cotton Quilted &amp;
                                                                    Bomber Jacket</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                1999</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                680</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">66% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 53.2px;"></div>
                                                                    </div><span class="numberRevsX">(2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/unboxed-micromax-yureka-plus-cyanogen/668347349231?MID=web|20thDec|DealofDayOffers452|668347349231"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/d/g/a/230x258/SDL921382269_1-2fe4d.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    OPEN-BOX YU Yureka Plus Cyanogen - 16 GB
                                                                    Grey</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                6490</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                6399</span></span></div>
                                                                    <!-- react-empty: 58 -->
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 46.2px;"></div>
                                                                    </div><span class="numberRevsX">(12)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>

                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/titan-leather-black-men-regular/214943515?MID=web|20thDec|DealofDayOffers434|214943515"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/a/n/e/230x258/Titan-Leather-Black-Men-Regular-SDL837914446-1-3471c.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Titan Leather Black Men Regular Wallet</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                1099</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                994</span></span></div>
                                                                    <!-- react-empty: 99 -->
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 60.2px;"></div>
                                                                    </div><span class="numberRevsX">(62)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <!--/width_ContstraX-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>

    <div class="my-4 p-3 bg-light rounded shadow-xs">
        <h6 class="pb-2 mb-0">Suggestions</h6>
        <div class="row text-muted pt-3">
            <div class="col-md-5">
            <img class='w-100' src="assets/tv.png" alt="" srcset="">
            </div>
            <div class="col-md-7">
            <div class="row bg-white shadow-xs rounded p-3">
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            <li class="OfferUnitX99 OffersContentBoxLi">
                <div class="offerUnit_innerContWrap"><a
                        href="https://www.x99999999.com/product/lenovo-20-speaker-m0521-red/1354033?MID=web|20thDec|DealofDayOffers383|1354033"
                        target="_blank" class="offerUnit_href">
                        <div class="offerUnit_href_afterWrap">
                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                    src="https://n4.sdlcdn.com/imgs/a/k/3/230x258/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg"
                                    alt="">
                            </div>

                    </a></div>
            </li>
            </div>

            </div>

</div>
        <small class="d-block text-right mt-3">
            <a href="#">All suggestions</a>
        </small>
    </div>
    <div class="Btc_container">
        <!--DealofDayOffers-->
        <div class="sectionX " id="onClickFilter_ScrollTo" style="margin-bottom: 0;">
            <div class="innerCard_sectionXWrap whiteBgX99 borderRounded4px ">
                <!--offerCont_wrap-->
                <div class="offerCont_wrap whiteCard_bg setBottomOffset">
                    <div class="offerUnit_Wrapper">
                        <div class="offerUnit">
                            <div class="width_ContstraX relFontX resp_LiX dummyHeight_bg innerSection">
                                <div class="contentX99_Wrapper">
                                    <!--width_ContstraX-->
                                    <ul class="offers_WrapperX99 relFontSize_util">
                                        <ul data-reactroot="" class="offers_WrapperX99 relFontSize_util">
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/intex-led3216-81-cm-32/637184242382?MID=web|17thDec|superDod7|637184242382"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/b/u/9/230x258/Intex-LED-3216-81-cm-SDL730883102-1-7a980.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Intex LED-3216 80 cm (32) HD Ready (HDR) LED
                                                                    Television</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                23999</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                12490</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">48% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 54.6px;"></div>
                                                                    </div><span class="numberRevsX">(6)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/campus-sutra-black-cotton-quilted/677758271578?MID=web|17thDec|superDod8|677758271578"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/c/g/a/230x258/Campus-Sutra-Black-Cotton-Quilted-SDL638477211-1-306e1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Campus Sutra Black Cotton Quilted &amp;
                                                                    Bomber Jacket</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                1999</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                680</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">66% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 53.2px;"></div>
                                                                    </div><span class="numberRevsX">(2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/unboxed-micromax-yureka-plus-cyanogen/668347349231?MID=web|20thDec|DealofDayOffers452|668347349231"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/d/g/a/230x258/SDL921382269_1-2fe4d.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    OPEN-BOX YU Yureka Plus Cyanogen - 16 GB
                                                                    Grey</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                6490</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                6399</span></span></div>
                                                                    <!-- react-empty: 58 -->
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 46.2px;"></div>
                                                                    </div><span class="numberRevsX">(12)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>

                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/titan-leather-black-men-regular/214943515?MID=web|20thDec|DealofDayOffers434|214943515"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/a/n/e/230x258/Titan-Leather-Black-Men-Regular-SDL837914446-1-3471c.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Titan Leather Black Men Regular Wallet</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                1099</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                994</span></span></div>
                                                                    <!-- react-empty: 99 -->
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 60.2px;"></div>
                                                                    </div><span class="numberRevsX">(62)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/veet-full-body-waxing-kit/528576577?MID=web|20thDec|DealofDayOffers394|528576577"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/a/g/5/230x258/SDL466773337_1391415453_image1-6da2b.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Veet Full Body Waxing Kit for Dry Skin -Pack
                                                                    of 1</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                170</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                152</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">11% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 56px;"></div>
                                                                    </div><span class="numberRevsX">(8)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/lakme-perfect-radiance-intense-whitening/155290?MID=web|20thDec|DealofDayOffers396|155290"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/b/x/c/230x258/Lakme-Perfect-Radiance-Intense-Whitening-1220794-1-00e8e.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Lakme Perfect Radiance Intense Whitening
                                                                    Golden Medium 03 Compact, 8 g</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                180</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                153</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">15% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 54.6px;"></div>
                                                                    </div><span class="numberRevsX">(93)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/tokyo-talkies-maroon-polyester-dresses/659435554060?MID=web|20thDec|DealofDayOffers462|659435554060"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                    src="https://n4.sdlcdn.com/imgs/c/0/v/230x258/Tokyo-Talkies-Maroon-Polyester-Dresses-SDL747193321-1-36ece.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Tokyo Talkies Polyester Dresses</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                1449</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                544</span></span></div>
                                                                    <div class="offerUnit_discountWrap">
                                                                        <div class="offerUnit_discount">62% Off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 36.4px;"></div>
                                                                    </div><span class="numberRevsX">(1)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                            <li class="OfferUnitX99 OffersContentBoxLi">
                                                <div class="offerUnit_innerContWrap"><a
                                                        href="https://www.x99999999.com/product/unboxed-infocus-m370i-8gbwhite/662322214948?MID=web|20thDec|DealofDayOffers454|662322214948"
                                                        target="_blank" class="offerUnit_href">
                                                        <div class="offerUnit_href_afterWrap">
                                                            <div class="offerUnit_imgWrap_sdPlusInc_rel">
                                                                <div class="offerUnit_sdPlusWrap_abs"></div><img
                                                                    class="offerUnit_img OfferImg b-lazy"
                                                                    data-src="https://n4.sdlcdn.com/imgs/c/4/6/230x258/UNBOXED_InFocus_M370i_8GB_White_SDL646366940_1_09d6d-9dab1.jpg"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                    alt="">
                                                            </div>
                                                            <div class="offerUnit_nonImgContWrap">
                                                                <div class="offerUnit_title twoLine_TitleX99">
                                                                    Open box InFocus M370i (8GB-White)</div>
                                                                <div class="offerUnit_priceTaglineWrap_rel">
                                                                    <div class="offerUnit_priceWrap"><span
                                                                            class="offerUnit_priceWrapAll"><span
                                                                                class="offerUnit_price">Rs.
                                                                                5199</span><span
                                                                                class="offerUnit_displayPrice">Rs.
                                                                                5099</span></span></div>
                                                                    <!-- react-empty: 182 -->
                                                                </div>
                                                                <div class="offerUnit_ratingWrap">
                                                                    <div class="offerUnit_rating_rel">
                                                                        <div class="ratingBG_disabled"></div>
                                                                        <div class="ratingBG_active"
                                                                            style="width: 53.2px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <!--/width_ContstraX-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

