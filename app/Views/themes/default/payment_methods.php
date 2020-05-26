<div class="container mt-6">
    <nav aria-label="breadcrumb shadow-xs bg-transparent">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 pl-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3 rounded shadow-xs">
                    <div class="modal-header border-0">
                        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">
                            Adress Details</h6>
                    </div>
                    <div class='pt-5'>
                        <h6>Rumbiiha Swaibu</h6>
                        <p class='m-0'>Kampala,Wakiso - Uganda</P>
                        <p class='m-0'>+257896638230<p>

                    </div>
                </li>
                <li class="list-group-item rounded shadow-xs">

                    <div class="modal-header border-0">
                        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">
                            <?= $page_title ?></h6>
                    </div>
                    <div class="m-auto sadow-xs p-5 w-100">
                        <h5 class='ml-4'>Select payment Method</h5>
                        <form class="d-flex btn-group-toggle m-auto" data-toggle="buttons">
                            <label class="btn btn-outline-light active shadow-sm">
                                <img height='70'
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjQiIGhlaWdodD0iMzMiPjxwYXRoIGZpbGw9IiMyNTNCODAiIGQ9Ik00Ni4yMTEgNi43NDloLTYuODM5YS45NS45NSAwIDAgMC0uOTM5LjgwMmwtMi43NjYgMTcuNTM3YS41Ny41NyAwIDAgMCAuNTY0LjY1OGgzLjI2NWEuOTUuOTUgMCAwIDAgLjkzOS0uODAzbC43NDYtNC43M2EuOTUuOTUgMCAwIDEgLjkzOC0uODAzaDIuMTY1YzQuNTA1IDAgNy4xMDUtMi4xOCA3Ljc4NC02LjUuMzA2LTEuODkuMDEzLTMuMzc1LS44NzItNC40MTUtLjk3Mi0xLjE0Mi0yLjY5Ni0xLjc0Ni00Ljk4NS0xLjc0NnpNNDcgMTMuMTU0Yy0uMzc0IDIuNDU0LTIuMjQ5IDIuNDU0LTQuMDYyIDIuNDU0aC0xLjAzMmwuNzI0LTQuNTgzYS41Ny41NyAwIDAgMSAuNTYzLS40ODFoLjQ3M2MxLjIzNSAwIDIuNCAwIDMuMDAyLjcwNC4zNTkuNDIuNDY5IDEuMDQ0LjMzMiAxLjkwNnpNNjYuNjU0IDEzLjA3NWgtMy4yNzVhLjU3LjU3IDAgMCAwLS41NjMuNDgxbC0uMTQ1LjkxNi0uMjI5LS4zMzJjLS43MDktMS4wMjktMi4yOS0xLjM3My0zLjg2OC0xLjM3My0zLjYxOSAwLTYuNzEgMi43NDEtNy4zMTIgNi41ODYtLjMxMyAxLjkxOC4xMzIgMy43NTIgMS4yMiA1LjAzMS45OTggMS4xNzYgMi40MjYgMS42NjYgNC4xMjUgMS42NjYgMi45MTYgMCA0LjUzMy0xLjg3NSA0LjUzMy0xLjg3NWwtLjE0Ni45MWEuNTcuNTcgMCAwIDAgLjU2Mi42NmgyLjk1YS45NS45NSAwIDAgMCAuOTM5LS44MDNsMS43Ny0xMS4yMDlhLjU2OC41NjggMCAwIDAtLjU2MS0uNjU4em0tNC41NjUgNi4zNzRjLS4zMTYgMS44NzEtMS44MDEgMy4xMjctMy42OTUgMy4xMjctLjk1MSAwLTEuNzExLS4zMDUtMi4xOTktLjg4My0uNDg0LS41NzQtLjY2OC0xLjM5MS0uNTE0LTIuMzAxLjI5NS0xLjg1NSAxLjgwNS0zLjE1MiAzLjY3LTMuMTUyLjkzIDAgMS42ODYuMzA5IDIuMTg0Ljg5Mi40OTkuNTg5LjY5NyAxLjQxMS41NTQgMi4zMTd6TTg0LjA5NiAxMy4wNzVoLTMuMjkxYS45NTQuOTU0IDAgMCAwLS43ODcuNDE3bC00LjUzOSA2LjY4Ni0xLjkyNC02LjQyNWEuOTUzLjk1MyAwIDAgMC0uOTEyLS42NzhoLTMuMjM0YS41Ny41NyAwIDAgMC0uNTQxLjc1NGwzLjYyNSAxMC42MzgtMy40MDggNC44MTFhLjU3LjU3IDAgMCAwIC40NjUuOWgzLjI4N2EuOTQ5Ljk0OSAwIDAgMCAuNzgxLS40MDhsMTAuOTQ2LTE1LjhhLjU3LjU3IDAgMCAwLS40NjgtLjg5NXoiLz48cGF0aCBmaWxsPSIjMTc5QkQ3IiBkPSJNOTQuOTkyIDYuNzQ5aC02Ljg0YS45NS45NSAwIDAgMC0uOTM4LjgwMmwtMi43NjYgMTcuNTM3YS41NjkuNTY5IDAgMCAwIC41NjIuNjU4aDMuNTFhLjY2NS42NjUgMCAwIDAgLjY1Ni0uNTYybC43ODUtNC45NzFhLjk1Ljk1IDAgMCAxIC45MzgtLjgwM2gyLjE2NGM0LjUwNiAwIDcuMTA1LTIuMTggNy43ODUtNi41LjMwNy0xLjg5LjAxMi0zLjM3NS0uODczLTQuNDE1LS45NzEtMS4xNDItMi42OTQtMS43NDYtNC45ODMtMS43NDZ6bS43ODkgNi40MDVjLS4zNzMgMi40NTQtMi4yNDggMi40NTQtNC4wNjIgMi40NTRoLTEuMDMxbC43MjUtNC41ODNhLjU2OC41NjggMCAwIDEgLjU2Mi0uNDgxaC40NzNjMS4yMzQgMCAyLjQgMCAzLjAwMi43MDQuMzU5LjQyLjQ2OCAxLjA0NC4zMzEgMS45MDZ6TTExNS40MzQgMTMuMDc1aC0zLjI3M2EuNTY3LjU2NyAwIDAgMC0uNTYyLjQ4MWwtLjE0NS45MTYtLjIzLS4zMzJjLS43MDktMS4wMjktMi4yODktMS4zNzMtMy44NjctMS4zNzMtMy42MTkgMC02LjcwOSAyLjc0MS03LjMxMSA2LjU4Ni0uMzEyIDEuOTE4LjEzMSAzLjc1MiAxLjIxOSA1LjAzMSAxIDEuMTc2IDIuNDI2IDEuNjY2IDQuMTI1IDEuNjY2IDIuOTE2IDAgNC41MzMtMS44NzUgNC41MzMtMS44NzVsLS4xNDYuOTFhLjU3LjU3IDAgMCAwIC41NjQuNjZoMi45NDlhLjk1Ljk1IDAgMCAwIC45MzgtLjgwM2wxLjc3MS0xMS4yMDlhLjU3MS41NzEgMCAwIDAtLjU2NS0uNjU4em0tNC41NjUgNi4zNzRjLS4zMTQgMS44NzEtMS44MDEgMy4xMjctMy42OTUgMy4xMjctLjk0OSAwLTEuNzExLS4zMDUtMi4xOTktLjg4My0uNDg0LS41NzQtLjY2Ni0xLjM5MS0uNTE0LTIuMzAxLjI5Ny0xLjg1NSAxLjgwNS0zLjE1MiAzLjY3LTMuMTUyLjkzIDAgMS42ODYuMzA5IDIuMTg0Ljg5Mi41MDEuNTg5LjY5OSAxLjQxMS41NTQgMi4zMTd6TTExOS4yOTUgNy4yM2wtMi44MDcgMTcuODU4YS41NjkuNTY5IDAgMCAwIC41NjIuNjU4aDIuODIyYy40NjkgMCAuODY3LS4zNC45MzktLjgwM2wyLjc2OC0xNy41MzZhLjU3LjU3IDAgMCAwLS41NjItLjY1OWgtMy4xNmEuNTcxLjU3MSAwIDAgMC0uNTYyLjQ4MnoiLz48cGF0aCBmaWxsPSIjMjUzQjgwIiBkPSJNNy4yNjYgMjkuMTU0bC41MjMtMy4zMjItMS4xNjUtLjAyN0gxLjA2MUw0LjkyNyAxLjI5MmEuMzE2LjMxNiAwIDAgMSAuMzE0LS4yNjhoOS4zOGMzLjExNCAwIDUuMjYzLjY0OCA2LjM4NSAxLjkyNy41MjYuNi44NjEgMS4yMjcgMS4wMjMgMS45MTcuMTcuNzI0LjE3MyAxLjU4OS4wMDcgMi42NDRsLS4wMTIuMDc3di42NzZsLjUyNi4yOThhMy42OSAzLjY5IDAgMCAxIDEuMDY1LjgxMmMuNDUuNTEzLjc0MSAxLjE2NS44NjQgMS45MzguMTI3Ljc5NS4wODUgMS43NDEtLjEyMyAyLjgxMi0uMjQgMS4yMzItLjYyOCAyLjMwNS0xLjE1MiAzLjE4M2E2LjU0NyA2LjU0NyAwIDAgMS0xLjgyNSAyYy0uNjk2LjQ5NC0xLjUyMy44NjktMi40NTggMS4xMDktLjkwNi4yMzYtMS45MzkuMzU1LTMuMDcyLjM1NWgtLjczYy0uNTIyIDAtMS4wMjkuMTg4LTEuNDI3LjUyNWEyLjIxIDIuMjEgMCAwIDAtLjc0NCAxLjMyOGwtLjA1NS4yOTktLjkyNCA1Ljg1NS0uMDQyLjIxNWMtLjAxMS4wNjgtLjAzLjEwMi0uMDU4LjEyNWEuMTU1LjE1NSAwIDAgMS0uMDk2LjAzNUg3LjI2NnoiLz48cGF0aCBmaWxsPSIjMTc5QkQ3IiBkPSJNMjMuMDQ4IDcuNjY3Yy0uMDI4LjE3OS0uMDYuMzYyLS4wOTYuNTUtMS4yMzcgNi4zNTEtNS40NjkgOC41NDUtMTAuODc0IDguNTQ1SDkuMzI2Yy0uNjYxIDAtMS4yMTguNDgtMS4zMjEgMS4xMzJMNi41OTYgMjYuODNsLS4zOTkgMi41MzNhLjcwNC43MDQgMCAwIDAgLjY5NS44MTRoNC44ODFjLjU3OCAwIDEuMDY5LS40MiAxLjE2LS45OWwuMDQ4LS4yNDguOTE5LTUuODMyLjA1OS0uMzJjLjA5LS41NzIuNTgyLS45OTIgMS4xNi0uOTkyaC43M2M0LjcyOSAwIDguNDMxLTEuOTIgOS41MTMtNy40NzYuNDUyLTIuMzIxLjIxOC00LjI1OS0uOTc4LTUuNjIyYTQuNjY3IDQuNjY3IDAgMCAwLTEuMzM2LTEuMDN6Ii8+PHBhdGggZmlsbD0iIzIyMkQ2NSIgZD0iTTIxLjc1NCA3LjE1MWE5Ljc1NyA5Ljc1NyAwIDAgMC0xLjIwMy0uMjY3IDE1LjI4NCAxNS4yODQgMCAwIDAtMi40MjYtLjE3N2gtNy4zNTJhMS4xNzIgMS4xNzIgMCAwIDAtMS4xNTkuOTkyTDguMDUgMTcuNjA1bC0uMDQ1LjI4OWExLjMzNiAxLjMzNiAwIDAgMSAxLjMyMS0xLjEzMmgyLjc1MmM1LjQwNSAwIDkuNjM3LTIuMTk1IDEwLjg3NC04LjU0NS4wMzctLjE4OC4wNjgtLjM3MS4wOTYtLjU1YTYuNTk0IDYuNTk0IDAgMCAwLTEuMDE3LS40MjkgOS4wNDUgOS4wNDUgMCAwIDAtLjI3Ny0uMDg3eiIvPjxwYXRoIGZpbGw9IiMyNTNCODAiIGQ9Ik05LjYxNCA3LjY5OWExLjE2OSAxLjE2OSAwIDAgMSAxLjE1OS0uOTkxaDcuMzUyYy44NzEgMCAxLjY4NC4wNTcgMi40MjYuMTc3YTkuNzU3IDkuNzU3IDAgMCAxIDEuNDgxLjM1M2MuMzY1LjEyMS43MDQuMjY0IDEuMDE3LjQyOS4zNjgtMi4zNDctLjAwMy0zLjk0NS0xLjI3Mi01LjM5MkMyMC4zNzguNjgyIDE3Ljg1MyAwIDE0LjYyMiAwaC05LjM4Yy0uNjYgMC0xLjIyMy40OC0xLjMyNSAxLjEzM0wuMDEgMjUuODk4YS44MDYuODA2IDAgMCAwIC43OTUuOTMyaDUuNzkxbDEuNDU0LTkuMjI1IDEuNTY0LTkuOTA2eiIvPjwvc3ZnPg=="
                                    alt="" srcset="">
                                <input type="radio" name="options" value='paypal' id="option1" autocomplete="off"
                                    checked>
                            </label>
                            <label class="btn btn-outline-light shadow-sm py-2 px-5">
                                <img height='70'
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhLS0gQ3JlYXRlZCB3aXRoIElua3NjYXBlIChodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy8pIC0tPgoKPHN2ZwogICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiCiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIKICAgeG1sbnM6c3ZnPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgogICB4bWxuczpzb2RpcG9kaT0iaHR0cDovL3NvZGlwb2RpLnNvdXJjZWZvcmdlLm5ldC9EVEQvc29kaXBvZGktMC5kdGQiCiAgIHhtbG5zOmlua3NjYXBlPSJodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy9uYW1lc3BhY2VzL2lua3NjYXBlIgogICB3aWR0aD0iMzYyIgogICBoZWlnaHQ9IjE1MS44IgogICB2aWV3Qm94PSIwIDAgOTUuNzc5MTY2IDQwLjE2Mzc0OSIKICAgdmVyc2lvbj0iMS4xIgogICBpZD0ic3ZnNTUxMiIKICAgaW5rc2NhcGU6dmVyc2lvbj0iMC45Mi4wIHIxNTI5OSIKICAgc29kaXBvZGk6ZG9jbmFtZT0ic3RyaXBlLnN2ZyI+CiAgPGRlZnMKICAgICBpZD0iZGVmczU1MDYiIC8+CiAgPHNvZGlwb2RpOm5hbWVkdmlldwogICAgIGlkPSJiYXNlIgogICAgIHBhZ2Vjb2xvcj0iI2ZmZmZmZiIKICAgICBib3JkZXJjb2xvcj0iIzY2NjY2NiIKICAgICBib3JkZXJvcGFjaXR5PSIxLjAiCiAgICAgaW5rc2NhcGU6cGFnZW9wYWNpdHk9IjAuMCIKICAgICBpbmtzY2FwZTpwYWdlc2hhZG93PSIyIgogICAgIGlua3NjYXBlOnpvb209IjIuMjI3Nzc3OCIKICAgICBpbmtzY2FwZTpjeD0iMTgwIgogICAgIGlua3NjYXBlOmN5PSI3NC44OTk5OTkiCiAgICAgaW5rc2NhcGU6ZG9jdW1lbnQtdW5pdHM9Im1tIgogICAgIGlua3NjYXBlOmN1cnJlbnQtbGF5ZXI9ImxheWVyMSIKICAgICBzaG93Z3JpZD0iZmFsc2UiCiAgICAgZml0LW1hcmdpbi10b3A9IjAiCiAgICAgZml0LW1hcmdpbi1sZWZ0PSIwIgogICAgIGZpdC1tYXJnaW4tcmlnaHQ9IjAiCiAgICAgZml0LW1hcmdpbi1ib3R0b209IjAiCiAgICAgdW5pdHM9InB4IgogICAgIGlua3NjYXBlOndpbmRvdy13aWR0aD0iMTI4MCIKICAgICBpbmtzY2FwZTp3aW5kb3ctaGVpZ2h0PSI3NDQiCiAgICAgaW5rc2NhcGU6d2luZG93LXg9Ii00IgogICAgIGlua3NjYXBlOndpbmRvdy15PSItNCIKICAgICBpbmtzY2FwZTp3aW5kb3ctbWF4aW1pemVkPSIxIiAvPgogIDxtZXRhZGF0YQogICAgIGlkPSJtZXRhZGF0YTU1MDkiPgogICAgPHJkZjpSREY+CiAgICAgIDxjYzpXb3JrCiAgICAgICAgIHJkZjphYm91dD0iIj4KICAgICAgICA8ZGM6Zm9ybWF0PmltYWdlL3N2Zyt4bWw8L2RjOmZvcm1hdD4KICAgICAgICA8ZGM6dHlwZQogICAgICAgICAgIHJkZjpyZXNvdXJjZT0iaHR0cDovL3B1cmwub3JnL2RjL2RjbWl0eXBlL1N0aWxsSW1hZ2UiIC8+CiAgICAgICAgPGRjOnRpdGxlPjwvZGM6dGl0bGU+CiAgICAgIDwvY2M6V29yaz4KICAgIDwvcmRmOlJERj4KICA8L21ldGFkYXRhPgogIDxnCiAgICAgaW5rc2NhcGU6bGFiZWw9IkxheWVyIDEiCiAgICAgaW5rc2NhcGU6Z3JvdXBtb2RlPSJsYXllciIKICAgICBpZD0ibGF5ZXIxIgogICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI0Ljk0NjQyOCwtMzI1LjAzNDUpIj4KICAgIDxnCiAgICAgICBpZD0iU3RyaXBlIgogICAgICAgdHJhbnNmb3JtPSJtYXRyaXgoMC4yNjQ1ODMzMywwLDAsMC4yNjQ1ODMzMywtMzguOTY5MzQ0LDMxNS43NzQwOSkiPgoJPHBhdGgKICAgaWQ9InBhdGg1NTE2IgogICBkPSJtIDQxNCwxMTMuNCBjIDAsLTI1LjYgLTEyLjQsLTQ1LjggLTM2LjEsLTQ1LjggLTIzLjgsMCAtMzguMiwyMC4yIC0zOC4yLDQ1LjYgMCwzMC4xIDE3LDQ1LjMgNDEuNCw0NS4zIDExLjksMCAyMC45LC0yLjcgMjcuNywtNi41IHYgLTIwIGMgLTYuOCwzLjQgLTE0LjYsNS41IC0yNC41LDUuNSAtOS43LDAgLTE4LjMsLTMuNCAtMTkuNCwtMTUuMiBoIDQ4LjkgYyAwLC0xLjMgMC4yLC02LjUgMC4yLC04LjkgeiBtIC00OS40LC05LjUgYyAwLC0xMS4zIDYuOSwtMTYgMTMuMiwtMTYgNi4xLDAgMTIuNiw0LjcgMTIuNiwxNiB6IgogICBjbGFzcz0ic3QwIgogICBpbmtzY2FwZTpjb25uZWN0b3ItY3VydmF0dXJlPSIwIgogICBzdHlsZT0iY2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojNjc3MmU1O2ZpbGwtcnVsZTpldmVub2RkIiAvPgoKCTxwYXRoCiAgIGlkPSJwYXRoNTUxOCIKICAgZD0ibSAzMDEuMSw2Ny42IGMgLTkuOCwwIC0xNi4xLDQuNiAtMTkuNiw3LjggbCAtMS4zLC02LjIgaCAtMjIgdiAxMTYuNiBsIDI1LC01LjMgMC4xLC0yOC4zIGMgMy42LDIuNiA4LjksNi4zIDE3LjcsNi4zIDE3LjksMCAzNC4yLC0xNC40IDM0LjIsLTQ2LjEgLTAuMSwtMjkgLTE2LjYsLTQ0LjggLTM0LjEsLTQ0LjggeiBtIC02LDY4LjkgYyAtNS45LDAgLTkuNCwtMi4xIC0xMS44LC00LjcgbCAtMC4xLC0zNy4xIGMgMi42LC0yLjkgNi4yLC00LjkgMTEuOSwtNC45IDkuMSwwIDE1LjQsMTAuMiAxNS40LDIzLjMgMCwxMy40IC02LjIsMjMuNCAtMTUuNCwyMy40IHoiCiAgIGNsYXNzPSJzdDAiCiAgIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiCiAgIHN0eWxlPSJjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiM2NzcyZTU7ZmlsbC1ydWxlOmV2ZW5vZGQiIC8+CgoJPHBvbHlnb24KICAgaWQ9InBvbHlnb241NTIwIgogICBwb2ludHM9IjI0OC45LDU2LjMgMjQ4LjksMzYgMjIzLjgsNDEuMyAyMjMuOCw2MS43ICIKICAgY2xhc3M9InN0MCIKICAgc3R5bGU9ImNsaXAtcnVsZTpldmVub2RkO2ZpbGw6IzY3NzJlNTtmaWxsLXJ1bGU6ZXZlbm9kZCIgLz4KCgk8cmVjdAogICBpZD0icmVjdDU1MjIiCiAgIGhlaWdodD0iODcuNSIKICAgd2lkdGg9IjI1LjEiCiAgIGNsYXNzPSJzdDAiCiAgIHk9IjY5LjMwMDAwMyIKICAgeD0iMjIzLjgiCiAgIHN0eWxlPSJjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiM2NzcyZTU7ZmlsbC1ydWxlOmV2ZW5vZGQiIC8+CgoJPHBhdGgKICAgaWQ9InBhdGg1NTI0IgogICBkPSJtIDE5Ni45LDc2LjcgLTEuNiwtNy40IGggLTIxLjYgdiA4Ny41IGggMjUgViA5Ny41IGMgNS45LC03LjcgMTUuOSwtNi4zIDE5LC01LjIgdiAtMjMgYyAtMy4yLC0xLjIgLTE0LjksLTMuNCAtMjAuOCw3LjQgeiIKICAgY2xhc3M9InN0MCIKICAgaW5rc2NhcGU6Y29ubmVjdG9yLWN1cnZhdHVyZT0iMCIKICAgc3R5bGU9ImNsaXAtcnVsZTpldmVub2RkO2ZpbGw6IzY3NzJlNTtmaWxsLXJ1bGU6ZXZlbm9kZCIgLz4KCgk8cGF0aAogICBpZD0icGF0aDU1MjYiCiAgIGQ9Im0gMTQ2LjksNDcuNiAtMjQuNCw1LjIgLTAuMSw4MC4xIGMgMCwxNC44IDExLjEsMjUuNyAyNS45LDI1LjcgOC4yLDAgMTQuMiwtMS41IDE3LjUsLTMuMyBWIDEzNSBjIC0zLjIsMS4zIC0xOSw1LjkgLTE5LC04LjkgViA5MC42IGggMTkgViA2OS4zIGggLTE5IHoiCiAgIGNsYXNzPSJzdDAiCiAgIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiCiAgIHN0eWxlPSJjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiM2NzcyZTU7ZmlsbC1ydWxlOmV2ZW5vZGQiIC8+CgoJPHBhdGgKICAgaWQ9InBhdGg1NTI4IgogICBkPSJtIDc5LjMsOTQuNyBjIDAsLTMuOSAzLjIsLTUuNCA4LjUsLTUuNCA3LjYsMCAxNy4yLDIuMyAyNC44LDYuNCBWIDcyLjIgQyAxMDQuMyw2OC45IDk2LjEsNjcuNiA4Ny44LDY3LjYgNjcuNSw2Ny42IDU0LDc4LjIgNTQsOTUuOSBjIDAsMjcuNiAzOCwyMy4yIDM4LDM1LjEgMCw0LjYgLTQsNi4xIC05LjYsNi4xIC04LjMsMCAtMTguOSwtMy40IC0yNy4zLC04IHYgMjMuOCBjIDkuMyw0IDE4LjcsNS43IDI3LjMsNS43IDIwLjgsMCAzNS4xLC0xMC4zIDM1LjEsLTI4LjIgLTAuMSwtMjkuOCAtMzguMiwtMjQuNSAtMzguMiwtMzUuNyB6IgogICBjbGFzcz0ic3QwIgogICBpbmtzY2FwZTpjb25uZWN0b3ItY3VydmF0dXJlPSIwIgogICBzdHlsZT0iY2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojNjc3MmU1O2ZpbGwtcnVsZTpldmVub2RkIiAvPgoKPC9nPgogIDwvZz4KICA8c3R5bGUKICAgICBpZD0ic3R5bGU1NTE0IgogICAgIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojNjc3MkU1O30KPC9zdHlsZT4KPC9zdmc+Cg=="
                                    alt="">
                                <input type="radio" name="options" id="option2" value='stripe' autocomplete="off">
                            </label>
                            <input type="submit" class='btn btn-block btn-primary' value="sumbit" id="">
                        </form>
                    </div>

                </li>
            </ul>

        </div>
        <div class="col-md-4 p-0">

            <div class="bg-white shadow-xs rounded p-2">
                <div class="modal-header border-0">
                    <h6 class="modal-title w-75 position-absolute bg-primary text-white" id="mymodalLabel">
                        Order Summary</h6>
                </div>
                <?php if(isset($_SESSION['cart'])):?>
                <ul class="list-group list-group-flush mt-4 p-2">
                    <?php foreach ($_SESSION['cart'] as $key => $value):?>
                    <li class="list-group-item d-flex">
                        <img height='50' width='50' class='rounded shadow-xs mr-2' src="<?= $value['image']?>" alt="">
                        <span class='d-flex flex-column w-75'>
                            <small class='mb-2 text-truncate'><?= $value['title']?></small>
                            <div class="d-flex">
                                <span class='ml-2'>Color : <?= $value['color']?></span>
                                <span class='ml-2'>Size : <?= $value['size']?></span>
                            </div>
                        </span>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </div>
        </div>

    </div>
</div>
<script>
console.log(<?= json_encode($_SESSION) ?>)
$('form').submit((e) => {
    e.preventDefault()
    $.post('/shopping/payments', {
        method: $('input:checked').val()
    }, function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
    console.log($('input:checked').val())
})
</script>
