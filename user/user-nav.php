<div id="drawer-navigation" class="hidden overflow-hidden lg:block pt-24 drop-shadow-2xl border br-2 fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 md:w-64 xl:w-72" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <div class="w-full h-16 md:h-14 xl:h-16 mb-5">
        <div class="grid grid-rows-3 grid-cols-4 h-full w-full">
            <div class="row-span-3 w-16 md:w-14  xl:w-16">
                <!-- <img src="../images/user/profile-pic/me.jpeg" class="rounded-lg" alt="profile_pic"> -->
                <div class="initialsOfName"style=" background-image: url('../images/user/profile-pic/default-pic.png')"></div>
            </div>
            <div class="table col-span-3 row-span-2 md:pl-2 text-xl md:text-base">
                <b class="table-cell align-bottom whitespace-nowrap"><?php echo $fname." ". $lname;?></b>
            </div>
            <div class="col-span-3 pl-2 md:text-base">
                <span class=""><?php echo $_SESSION["member_id"]; ?></span>
            </div>
        </div>
    </div>
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase">Menu</h5>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2">
         <li>
            <a href="./index.php" id="nav_dashboard" class="flex items-center p-2 text-base font-normal rounded-lg text-gray-600">
               <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="./members.php" id="nav_members" class="flex items-center p-2 text-base font-normal text-gray-600 rounded-lg hover:bg-emerald-600 hover:text-white">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 287.456 287.456" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <g>
                        <g>
                            <g id="XMLID_38_">
                                <g>
                                    <g>
                                        <path style="fill:#505967;" d="M43.794,166.407c8.086,0,14.655,6.568,14.655,14.655s-6.568,14.686-14.655,14.686        s-14.686-6.599-14.686-14.686C29.108,172.976,35.707,166.407,43.794,166.407z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#505967;" d="M242.671,166.407c8.086,0,14.655,6.568,14.655,14.655s-6.568,14.686-14.655,14.686        c-8.086,0-14.655-6.599-14.655-14.686C228.016,172.976,234.584,166.407,242.671,166.407z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#EAEEEF;" d="M269.564,269.362c0.093,0.713-0.186,1.208-0.465,1.518c-0.248,0.31-0.713,0.651-1.425,0.651        H218.69c-0.744,0-1.208-0.341-1.456-0.651c-0.279-0.31-0.558-0.806-0.465-1.518l5.019-37.21        c0.124-0.96,0.96-1.673,1.921-1.673h38.914c0.96,0,1.797,0.713,1.921,1.673L269.564,269.362z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#EAEEEF;" d="M70.687,269.362c0.093,0.713-0.186,1.208-0.465,1.518c-0.248,0.31-0.713,0.651-1.456,0.651        H19.782c-0.713,0-1.177-0.341-1.425-0.651c-0.279-0.31-0.558-0.806-0.465-1.518l5.019-37.21        c0.124-0.96,0.96-1.673,1.921-1.673h38.914c0.96,0,1.766,0.713,1.921,1.673L70.687,269.362z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#505967;" d="M144.208,15.894c8.086,0,14.686,6.599,14.686,14.686s-6.599,14.655-14.686,14.655        c-8.086,0-14.655-6.568-14.655-14.655S136.122,15.894,144.208,15.894z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#EAEEEF;" d="M171.132,118.849c0.093,0.713-0.217,1.239-0.465,1.549c-0.279,0.279-0.744,0.651-1.456,0.651        h-48.983c-0.713,0-1.177-0.372-1.456-0.651c-0.248-0.31-0.558-0.837-0.465-1.549l5.05-37.179        c0.124-0.96,0.929-1.673,1.89-1.673h38.945c0.96,0,1.766,0.713,1.89,1.673L171.132,118.849z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M285.334,267.224c0.682,5.112-0.867,10.255-4.245,14.128        c-3.377,3.873-8.272,6.104-13.415,6.104H218.69c-5.174,0-10.069-2.231-13.446-6.104c-3.377-3.873-4.926-9.016-4.245-14.128        l5.019-37.21c1.208-8.799,8.799-15.46,17.691-15.46h38.914c8.892,0,16.483,6.661,17.691,15.46L285.334,267.224z         M269.099,270.88c0.279-0.31,0.558-0.806,0.465-1.518l-5.019-37.21c-0.124-0.96-0.96-1.673-1.921-1.673H223.71        c-0.96,0-1.797,0.713-1.921,1.673l-5.019,37.21c-0.093,0.713,0.186,1.208,0.465,1.518c0.248,0.31,0.713,0.651,1.456,0.651        h48.983C268.386,271.531,268.851,271.19,269.099,270.88z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M242.671,150.482c16.855,0,30.58,13.725,30.58,30.58s-13.725,30.58-30.58,30.58        s-30.58-13.725-30.58-30.58S225.816,150.482,242.671,150.482z M257.326,181.062c0-8.086-6.568-14.655-14.655-14.655        c-8.086,0-14.655,6.568-14.655,14.655s6.568,14.686,14.655,14.686C250.757,195.748,257.326,189.148,257.326,181.062z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M186.902,116.742c0.682,5.081-0.868,10.255-4.276,14.128        c-3.377,3.873-8.272,6.073-13.415,6.073h-48.983c-5.143,0-10.038-2.2-13.415-6.073c-3.408-3.873-4.957-9.047-4.276-14.128        l5.05-37.21c1.177-8.83,8.799-15.46,17.66-15.46h38.945c8.861,0,16.483,6.63,17.66,15.46L186.902,116.742z M170.667,120.398        c0.248-0.31,0.558-0.837,0.465-1.549l-5.05-37.179c-0.124-0.96-0.929-1.673-1.89-1.673h-38.945        c-0.96,0-1.766,0.713-1.89,1.673l-5.05,37.179c-0.093,0.713,0.217,1.239,0.465,1.549c0.279,0.279,0.744,0.651,1.456,0.651        h48.983C169.924,121.049,170.389,120.677,170.667,120.398z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M184.702,232.338c2.974,3.222,2.788,8.241-0.434,11.247c-1.518,1.425-3.47,2.107-5.422,2.107        c-2.138,0-4.245-0.837-5.825-2.541l-28.194-30.394l-28.969,28.969c-1.549,1.549-3.594,2.324-5.608,2.324        c-2.045,0-4.09-0.775-5.639-2.324c-3.098-3.129-3.098-8.148,0-11.247l32.47-32.501v-43.747c0-4.4,3.563-7.963,7.963-7.963        s7.963,3.563,7.963,7.963v43.933L184.702,232.338z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M144.208,0c16.885,0,30.58,13.725,30.58,30.58s-13.694,30.58-30.58,30.58        c-16.855,0-30.58-13.725-30.58-30.58S127.354,0,144.208,0z M158.894,30.58c0-8.086-6.599-14.686-14.686-14.686        c-8.086,0-14.655,6.599-14.655,14.686s6.568,14.655,14.655,14.655S158.894,38.666,158.894,30.58z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M86.457,267.224c0.682,5.112-0.868,10.255-4.245,14.128c-3.408,3.873-8.303,6.104-13.446,6.104        H19.782c-5.143,0-10.038-2.231-13.415-6.104c-3.377-3.873-4.926-9.016-4.245-14.128l5.019-37.21        c1.208-8.799,8.799-15.46,17.691-15.46h38.914c8.892,0,16.483,6.661,17.66,15.46L86.457,267.224z M70.222,270.88        c0.279-0.31,0.558-0.806,0.465-1.518l-5.019-37.21c-0.155-0.96-0.96-1.673-1.921-1.673H24.833        c-0.96,0-1.797,0.713-1.921,1.673l-5.019,37.21c-0.093,0.713,0.186,1.208,0.465,1.518c0.248,0.31,0.713,0.651,1.425,0.651        h48.983C69.509,271.531,69.974,271.19,70.222,270.88z"/>
                                    </g>
                                    <g>
                                        <path style="fill:#2D213F;" d="M43.794,150.482c16.855,0,30.58,13.725,30.58,30.58s-13.725,30.58-30.58,30.58        c-16.885,0-30.58-13.725-30.58-30.58S26.908,150.482,43.794,150.482z M58.449,181.062c0-8.086-6.568-14.655-14.655-14.655        s-14.686,6.568-14.686,14.655s6.599,14.686,14.686,14.686S58.449,189.148,58.449,181.062z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <path style="fill:#C5CBCF;" d="M120.689,121.049h48.522c0.713,0,1.177-0.372,1.456-0.651c0.248-0.31,0.558-0.837,0.465-1.549     l-5.05-37.179c-0.04-0.316-0.173-0.589-0.344-0.833C160.158,92.737,147.706,107.544,120.689,121.049z"/>
                        </g>
                        <g>
                            <path style="fill:#C5CBCF;" d="M20.359,271.55H68.88c0.713,0,1.177-0.372,1.456-0.651c0.248-0.31,0.558-0.837,0.465-1.549     l-5.05-37.179c-0.04-0.316-0.174-0.589-0.344-0.833C59.827,243.238,47.375,258.044,20.359,271.55z"/>
                        </g>
                        <g>
                            <path style="fill:#C5CBCF;" d="M219.205,271.55h48.522c0.713,0,1.177-0.372,1.456-0.651c0.248-0.31,0.558-0.837,0.465-1.549     l-5.05-37.179c-0.04-0.316-0.173-0.589-0.344-0.833C258.673,243.238,246.221,258.044,219.205,271.55z"/>
                        </g>
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Members</span>
            </a>
         </li>
         <li>
            <a href="payout.php" id="nav_request" class="flex items-center p-2 text-base font-normal text-gray-600 rounded-lg hover:bg-emerald-600 hover:text-white">
            <svg class="flex-shrink-0 w-6 h-6" viewBox="0 0 512 512" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <path d="M 50.5,-0.5 C 187.167,-0.5 323.833,-0.5 460.5,-0.5C 460.5,22.5 460.5,45.5 460.5,68.5C 454.833,68.5 449.167,68.5 443.5,68.5C 443.5,91.1667 443.5,113.833 443.5,136.5C 415.167,136.5 386.833,136.5 358.5,136.5C 358.992,197.917 358.492,259.25 357,320.5C 355.681,322.487 353.848,323.654 351.5,324C 321.502,324.5 291.502,324.667 261.5,324.5C 267.503,340.333 274.003,356 281,371.5C 281.667,416.5 281.667,461.5 281,506.5C 279.975,508.687 278.475,510.354 276.5,511.5C 239.5,511.5 202.5,511.5 165.5,511.5C 164.542,510.038 163.376,508.705 162,507.5C 161.667,495.167 161.333,482.833 161,470.5C 147,431.167 133,391.833 119,352.5C 118.333,313.5 118.333,274.5 119,235.5C 129.268,223.229 140.268,211.563 152,200.5C 152.5,179.169 152.667,157.836 152.5,136.5C 124.167,136.5 95.8333,136.5 67.5,136.5C 67.5,113.833 67.5,91.1667 67.5,68.5C 61.8333,68.5 56.1667,68.5 50.5,68.5C 50.5,45.5 50.5,22.5 50.5,-0.5 Z M 68.5,17.5 C 193.167,17.5 317.833,17.5 442.5,17.5C 442.5,28.5 442.5,39.5 442.5,50.5C 317.833,50.5 193.167,50.5 68.5,50.5C 68.5,39.5 68.5,28.5 68.5,17.5 Z M 85.5,68.5 C 198.833,68.5 312.167,68.5 425.5,68.5C 425.5,85.1667 425.5,101.833 425.5,118.5C 403.167,118.5 380.833,118.5 358.5,118.5C 358.5,113.167 358.5,107.833 358.5,102.5C 364.167,102.5 369.833,102.5 375.5,102.5C 375.5,96.5 375.5,90.5 375.5,84.5C 295.5,84.5 215.5,84.5 135.5,84.5C 135.5,90.5 135.5,96.5 135.5,102.5C 141.167,102.5 146.833,102.5 152.5,102.5C 152.5,107.833 152.5,113.167 152.5,118.5C 130.167,118.5 107.833,118.5 85.5,118.5C 85.5,101.833 85.5,85.1667 85.5,68.5 Z M 170.5,102.5 C 175.833,102.5 181.167,102.5 186.5,102.5C 186.5,142.167 186.5,181.833 186.5,221.5C 192.5,221.5 198.5,221.5 204.5,221.5C 204.333,194.498 204.5,167.498 205,140.5C 228.119,162.568 254.619,167.734 284.5,156C 292.638,152.181 299.805,147.014 306,140.5C 306.5,167.498 306.667,194.498 306.5,221.5C 312.5,221.5 318.5,221.5 324.5,221.5C 324.5,181.833 324.5,142.167 324.5,102.5C 329.833,102.5 335.167,102.5 340.5,102.5C 340.5,170.5 340.5,238.5 340.5,306.5C 312.167,306.5 283.833,306.5 255.5,306.5C 255.667,292.829 255.5,279.163 255,265.5C 252.067,255.566 245.567,249.4 235.5,247C 228.833,246.333 222.167,246.333 215.5,247C 211.637,248.181 208.137,250.014 205,252.5C 204.501,247.511 204.334,242.511 204.5,237.5C 198.5,237.5 192.5,237.5 186.5,237.5C 186.5,255.167 186.5,272.833 186.5,290.5C 189.5,290.5 192.5,290.5 195.5,290.5C 195.5,295.833 195.5,301.167 195.5,306.5C 187.167,306.5 178.833,306.5 170.5,306.5C 170.5,238.5 170.5,170.5 170.5,102.5 Z M 205.5,103.5 C 238.664,102.336 271.997,102.169 305.5,103C 298.486,128.354 281.82,142.188 255.5,144.5C 229.361,142.13 212.695,128.463 205.5,103.5 Z M 252.5,196.5 C 261.56,196.046 264.727,200.046 262,208.5C 256.513,214.133 251.846,213.466 248,206.5C 247.077,202.017 248.577,198.683 252.5,196.5 Z M 151.5,226.5 C 152.332,256.997 152.832,287.664 153,318.5C 154.26,321.428 156.427,323.261 159.5,324C 171.495,324.5 183.495,324.667 195.5,324.5C 195.5,335.833 195.5,347.167 195.5,358.5C 201.5,358.5 207.5,358.5 213.5,358.5C 213.333,328.831 213.5,299.165 214,269.5C 216.877,265.401 220.877,263.734 226,264.5C 230.98,263.493 234.647,265.16 237,269.5C 237.333,285.167 237.667,300.833 238,316.5C 246.058,336.282 254.391,355.949 263,375.5C 263.5,403.498 263.667,431.498 263.5,459.5C 234.26,459.829 205.093,459.495 176,458.5C 163,421.833 150,385.167 137,348.5C 136.333,312.833 136.333,277.167 137,241.5C 142.037,236.631 146.87,231.631 151.5,226.5 Z M 179.5,477.5 C 207.5,477.5 235.5,477.5 263.5,477.5C 263.5,482.833 263.5,488.167 263.5,493.5C 235.5,493.5 207.5,493.5 179.5,493.5C 179.5,488.167 179.5,482.833 179.5,477.5 Z"/>
                </g>
                <g>
                    <path fill="#6b7280" d="M 101.5,84.5 C 107.5,84.5 113.5,84.5 119.5,84.5C 119.5,90.5 119.5,96.5 119.5,102.5C 113.5,102.5 107.5,102.5 101.5,102.5C 101.5,96.5 101.5,90.5 101.5,84.5 Z"/>
                </g>
                <g>
                    <path fill="#6b7280" d="M 391.5,84.5 C 397.5,84.5 403.5,84.5 409.5,84.5C 409.5,90.5 409.5,96.5 409.5,102.5C 403.5,102.5 397.5,102.5 391.5,102.5C 391.5,96.5 391.5,90.5 391.5,84.5 Z"/>
                </g>
                <g>
                    <path fill="#6b7280" d="M 248.5,178.5 C 271.467,176.968 282.3,187.634 281,210.5C 272.937,229.779 259.437,234.946 240.5,226C 228.91,216.12 226.41,204.287 233,190.5C 237.02,184.919 242.186,180.919 248.5,178.5 Z M 252.5,196.5 C 248.577,198.683 247.077,202.017 248,206.5C 251.846,213.466 256.513,214.133 262,208.5C 264.727,200.046 261.56,196.046 252.5,196.5 Z"/>
                </g>
                <g>
                    <path fill="#6b7280" d="M 306.5,237.5 C 312.5,237.5 318.5,237.5 324.5,237.5C 324.5,255.167 324.5,272.833 324.5,290.5C 307.167,290.5 289.833,290.5 272.5,290.5C 272.5,284.5 272.5,278.5 272.5,272.5C 283.833,272.5 295.167,272.5 306.5,272.5C 306.5,260.833 306.5,249.167 306.5,237.5 Z"/>
                </g>
            </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Request Payout</span>
            </a>
         </li>
         <li>
            <a href="#" id="nav_edit" class="flex items-center p-2 text-base font-normal text-gray-600 rounded-lg hover:bg-emerald-600 hover:text-white">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M 210.5,60.5 C 259.278,61.1196 293.778,83.4529 314,127.5C 331.543,177.161 320.71,219.328 281.5,254C 263.765,267.36 243.765,275.026 221.5,277C 151.415,278.11 102.248,310.61 74,374.5C 70.3664,384.231 67.8664,394.231 66.5,404.5C 103.168,404.333 139.835,404.5 176.5,405C 190.851,411.005 195.351,421.505 190,436.5C 187.532,441.989 183.365,445.489 177.5,447C 129.833,447.667 82.1667,447.667 34.5,447C 28.7531,444.921 24.5864,441.088 22,435.5C 18.7954,368.085 43.6287,313.585 96.5,272C 109.724,262.885 123.724,255.052 138.5,248.5C 104.186,210.087 97.019,167.087 117,119.5C 137.681,83.3361 168.848,63.6694 210.5,60.5 Z M 206.5,106.5 C 245.484,106.324 268.65,125.324 276,163.5C 277.739,194.055 264.906,215.888 237.5,229C 205.346,239.502 179.179,231.335 159,204.5C 143.401,174.769 146.901,147.602 169.5,123C 180.215,113.712 192.549,108.212 206.5,106.5 Z"/>
                    </g>
                    <g>
                        <path d="M 408.5,191.5 C 415.582,190.643 422.249,191.809 428.5,195C 447.667,214.167 466.833,233.333 486,252.5C 491.583,260.927 491.916,269.593 487,278.5C 440.167,325.333 393.333,372.167 346.5,419C 318.586,428.86 290.586,438.527 262.5,448C 249.955,450.472 240.455,446.306 234,435.5C 232.524,430.924 232.19,426.257 233,421.5C 242.408,392.276 252.408,363.276 263,334.5C 309.5,288 356,241.5 402.5,195C 404.727,194.059 406.727,192.892 408.5,191.5 Z M 414.5,244.5 C 422.411,250.906 429.911,257.906 437,265.5C 437.667,266.167 437.667,266.833 437,267.5C 399.5,305 362,342.5 324.5,380C 313.445,384.577 302.112,387.91 290.5,390C 293.994,379.517 297.494,369.017 301,358.5C 339.035,320.632 376.868,282.632 414.5,244.5 Z"/>
                    </g>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Edit Profile</span>
            </a>
         </li>
         <li>
            <a href="../includes/auth/signout.php" class="flex items-center p-2 text-base font-normal text-gray-600 rounded-lg hover:bg-emerald-600 hover:text-white">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path d="M224.48633,136.48438l-41.98926,42a12.0001,12.0001,0,0,1-16.97266-16.96876L187.03467,140H104a12,12,0,0,1,0-24h83.03467L165.52441,94.48438a12.0001,12.0001,0,0,1,16.97266-16.96876l41.98926,42A12.00094,12.00094,0,0,1,224.48633,136.48438ZM104,204H52V52h52a12,12,0,0,0,0-24H48A20.02229,20.02229,0,0,0,28,48V208a20.02229,20.02229,0,0,0,20,20h56a12,12,0,0,0,0-24Z"/>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
      </ul>
   </div>
</div>



