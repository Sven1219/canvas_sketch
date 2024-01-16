<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none backdrop-blur"
    id="create_project_modal" tabindex="-1" aria-labelledby="test_modalTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex w-auto items-center duration-300 mx-auto h-screen justify-center">
        <!-- <div id="select_mode"
            class="pointer-events-auto relative flex w-fit flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
            <div class="p-8 flex flex-col gap-6">
                <p>New Project</p>
                <div class="flex gap-6">
                    <button
                        class="flex gap-3 justify-center items-center text-[#13816B] text-center bg-emerald-100 hover:bg-emerald-200 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium inline-flex items-center w-64 py-4 text-center"
                        onclick="select_mode('Sketch')">
                        <i class="fa-solid fa-square-pen text-2xl"></i>
                        Sketch Mode
                    </button>
                    <button
                        class="flex gap-3 justify-center items-center text-[#ED0000] text-center bg-rose-100 hover:bg-rose-200 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium inline-flex items-center w-64 py-4 text-center"
                        onclick="select_mode('Data')">
                        <img class="h-6 mb-0.5" src="/assets/img/direct-inbox.svg" />
                        Data Mode
                    </button>
                </div>
            </div>
        </div> -->
        <div id="add_project_data"
            class="pointer-events-auto relative p-4 w-1/2 min-w-[600px] max-w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-xl overflow-hidden shadow">
                <!-- Modal header -->
                <div class="flex items-center py-5 px-8 gap-4">
                    <!-- <button onclick="back_to_select_mode()"
                        class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 h-10 w-10 hover:bg-rose-500 hover:text-white">
                        <i class="fa-solid fa-angle-left text-lg"></i>
                    </button> -->
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add Project Data
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="px-8 pb-8 flex flex-wrap justify-end">
                    <div class="w-full grid gap-4 mb-8 grid-cols-2">
                        <div class="col-span-2">
                            <label for="project_name"
                                class="block mb-2 font-medium text-gray-900">Project name
                            </label>
                            <input type="text" name="project_name" required="" id="project_name"
                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3"
                                placeholder="Type project name" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 font-medium text-gray-900">
                                Project Description
                            </label>
                            <textarea id="description" name="description"
                                class="block p-3 w-full text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write product description here"></textarea>
                        </div>

                        <div class="col-span-2">
                            <label for="map" class="block mb-2 font-medium text-gray-900">
                                Project Location
                            </label>
                            <div class="border border-gray-300 rounded-lg h-36" id="map"></div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="client_name" class="block mb-2 font-medium text-gray-900">Client name</label>
                            <input type="text" name="client_name" id="client_name"
                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="project_number"
                                class="block mb-2 font-medium text-gray-900">Project number</label>
                            <input type="text" name="project_number" id="project_number"
                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="address" class="block mb-2 font-medium text-gray-900">Project Address</label>
                            <input type="text" name="address" id="address"
                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="plot_number" class="block mb-2 font-medium text-gray-900">Plot number</label>
                            <input type="text" name="plot_number" id="plot_number"
                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3">
                        </div>
                    </div>
                    <button type="button"
                        class="text-white inline-flex bg-rose-500 hover:bg-rose-600 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg px-6 py-3.5 flex text-lg items-center gap-2.5"
                        onclick="submit_project_data(1)">
                        Next
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="sketch_canvas"
            class="hidden pointer-events-auto relative p-4 w-3/4 min-w-[800px] max-w-full max-h-full">
            <!-- Modal content -->
            <div class="bg-gray-100 rounded-xl max-h-content">
                <div class="flex-1 relative overflow-hidden shadow flex flex-col px-8 py-4 gap-5 bg-white rounded-t-lg">
                    <div class="flex justify-between items-center gap-2 plot_canvas_panel">
                        <button onclick="back_to_add_project_data()"
                            class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 h-14 w-14 hover:bg-rose-500 hover:text-white">
                            <i class="fa-solid fa-angle-left text-xl"></i>
                        </button>
                        <h3 class="text-2xl font-semibold text-gray-900" id="project_name_display">
                            Floor Canvas
                        </h3>
                        <input type="text" id="project_name_edit" name="project_name_edit" required="" value="" class="hidden w-[100px] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                        <button onclick="editProject()" id="edit_project_name">
                            <i class="fa fa-pencil-square-o text-xl text-gray-300"></i>
                        </button>
                        <button class="rounded-md bg-gray-300 text-gray-500 p-2">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span>Attempting to download</span>
                        </button>
                        <p class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 w-10 h-10 hover:bg-rose-500 hover:text-white"
                            id="floor_left">
                            5
                        </p>
                        <input type="number" id="floor_left_edit" name="floor_left_edit" required="" value="5" class="hidden w-[60px] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                        <p class="text-gray-900">
                            Floor Left
                        </p>
                        <p class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 w-10 h-10 hover:bg-rose-500 hover:text-white"
                            id="plot_left">
                            5
                        </p>
                        <input type="number" id="plot_left_edit" name="plot_left_edit" required="" value="5" class="hidden w-[60px] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                        <p class="text-gray-900">
                            Plot Left
                        </p>
                        <p class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 w-10 h-10 hover:bg-rose-500 hover:text-white"
                            id="rooms_left">
                            5
                        </p>
                        <input type="number" id="rooms_left_edit" name="rooms_left_edit" required="" value="5" class="hidden w-[60px] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                        <p class="text-gray-900">
                            Rooms Left
                        </p>
                        <p class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 w-10 h-10 hover:bg-rose-500 hover:text-white"
                            id="buildings_left">
                            5
                        </p>
                        <input type="number" id="buildings_left_edit" name="buildings_left_edit" required="" value="5" class="hidden w-[60px] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                        <p class="text-gray-900">
                            Buildings Left
                        </p>
                        <div class="flex gap-2 px-3 py-2 rounded-full border">
                            <label for="autosave_toggle" class="flex items-center cursor-pointer select-none text-dark dark:text-white">
                                <div class="relative">
                                    <input id="autosave_toggle" type="checkbox" class="peer sr-only" onchange="onAutoSave()"/>
                                    <div class="h-4 rounded-full shadow-inner bg-rose-300 dark:bg-dark-2 w-12"></div>
                                    <div class="absolute left-0 transition bg-gray-600 rounded-full dot shadow-switch-1 dark:bg-dark-4 -top-1 h-6 w-6 peer-checked:translate-x-full peer-checked:bg-rose-500"></div>
                                </div>
                            </label>
                            <span>Auto Save</span>
                        </div>
                        <button class="bg-rose-500 rounded-md text-white py-2 px-8" onclick="save_project_info()">Save</button>
                    </div>
                </div>
                <div class="flex h-full w-full">
                    <div class="flex h-inherit">
                        <div class="w-full h-full relative">
                            <div class="h-full max-h-[calc(100vh-18rem)] rounded-br-xl border bg-white px-4 py-8 text-rose-500 text-xl items-center" id="docking_bar">
                                <div class="flex flex-col gap-10" id="docking_normal">
                                    <button class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('zoning_plan')">
                                        <i class="fa-solid fa-home"></i>
                                    </button>
                                    <button class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('zoning_model')">
                                        <i class="fa-solid fa-th-large"></i>
                                    </button>
                                    <button class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('detailed_model')">
                                        <i class="fa-solid fa-th"></i>
                                    </button>
                                    <button class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('pdf_dwgs')">
                                        <i class="fa-solid fa-file-pdf-o"></i>
                                    </button>
                                    <button class="py-2 px-2.5 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('dwg_files')">
                                        <i class="fa-solid fa-paint-brush"></i>
                                    </button>
                                    <button class="py-2 px-3.5 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white" onclick="onToggleScreen('reports')">
                                        <i class="fa-solid fa-file-text-o"></i>
                                    </button>
                                </div>
                                <div class="hidden flex flex-col gap-10" id="docking_expand">
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('zoning_plan')">
                                        <div class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-home"></i>
                                        </div>
                                        <p class="text-sm text-black">Zoning plan</p>
                                    </button>
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('zoning_model')">
                                        <div class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-th-large"></i>
                                        </div>
                                        <p class="text-sm text-black">Zoning model</p>
                                    </button>
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('detailed_model')">
                                        <div class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-th"></i>
                                        </div>
                                        <p class="text-sm text-black">Detailed model</p>
                                    </button>
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('pdf_dwgs')">
                                        <div class="py-2 px-3 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-file-pdf-o"></i>
                                        </div>
                                        <p class="text-sm text-black">Pdf dwgs</p>
                                    </button>
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('dwg_files')">
                                        <div class="py-2 px-2.5 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-paint-brush"></i>
                                        </div>
                                        <p class="text-sm text-black">Dwg dwgs</p>
                                    </button>
                                    <button class="flex gap-5 items-center" onclick="onToggleScreen('reports')">
                                        <div class="py-2 px-3.5 rounded-full bg-rose-100 hover:bg-rose-500 hover:text-white">
                                            <i class="fa-solid fa-file-text-o"></i>
                                        </div>
                                        <p class="text-sm text-black">Reports</p>
                                    </button>
                                </div>
                            </div>
                            <div class="absolute bottom-5 bg-white px-7 py-4 rounded-r-xl border" id="download_setting">
                                <button class="bg-black text-white text-xl py-4 px-6 mt-0.5 rounded-full" id="download_setting_btn">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                </button>
                                <div class="relative hidden" id="download_setting_modal">
                                    <div class="absolute bottom-10 left-10 w-[250px] z-[10000]">
                                        <div class="flex flex-col gap-3 bg-white border py-3 rounded-2xl">
                                            <button class="flex gap-2 items-center pl-5">
                                                <div class="py-2 px-3.5 rounded-full bg-rose-100 text-rose-500 hover:text-white">
                                                    <i class="fa-solid fa-file-text-o"></i>
                                                </div>
                                                <p>Upload Project File</p>
                                            </button>
                                            <hr class="w-full my-0">
                                            <button class="flex gap-2 items-center pl-5">
                                                <div class="py-2 px-3.5 rounded-full bg-rose-100 text-rose-500 hover:text-white">
                                                    <i class="fa-solid fa-file-text-o"></i>
                                                </div>
                                                <p>Download Project File</p>
                                            </button>
                                            <hr class="w-full my-0">
                                            <button class="flex gap-2 items-center pl-5" onclick="onGenerate()">
                                                <div class="py-2 px-3.5 rounded-full bg-rose-100 text-rose-500 hover:text-white">
                                                    <i class="fa-solid fa-file-text-o"></i>
                                                </div>
                                                <p>Download Json File</p>
                                            </button>
                                            <hr class="w-full my-0">
                                            <button class="flex gap-2 items-center pl-5" id="json_upload_btn">
                                                <div class="py-2 px-3.5 rounded-full bg-rose-100 text-rose-500 hover:text-white">
                                                    <i class="fa-solid fa-file-text-o"></i>
                                                </div>
                                                <p>Upload Json File</p>
                                            </button>
                                            <input type="file" id="json_upload_input" class="hidden" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode" id="zoning_plan">
                        <div class="flex w-full px-8 py-2 gap-5">
                            <div class="flex w-[530px] bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="relative" id="plot_current_parent">
                                    <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex items-center text-nowrap w-64 cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-slate-900 dark:border-gray-700",
                                        "optionClasses": "py-2 px-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-slate-100 dark:hover:bg-slate-800 dark:text-gray-200 dark:focus:bg-slate-800",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"font-semibold text-gray-800 dark:text-gray-200\" data-title></div></div><div class=\"mt-1.5 text-sm text-gray-500\" data-description></div></div>"
                                        }' class="hidden">
                                        <option value="1" selected data-hs-select-option='{
                                            "icon": "<i class=\"fa fa-home\"></i>"
                                        }'>Current parent</option>
                                    </select>
                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <i class="fa fa-angle-down text-rose-500"></i>
                                    </div>
                                </div>
                                <div class="hidden flex items-center" id="floor_current_parent">
                                    <select data-te-select-init id="select_building">

                                    </select>
                                </div>
                                <div class="flex justify-center items-center border rounded-md p-2">
                                    <input id="plot_mode" type="radio" value="plot" name="sketch_mode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked onchange="back_to_plot_sketch_canvas()">
                                    <label for="plot_mode" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plot Mode</label>
                                </div>
                                <div class="flex justify-center items-center border rounded-md p-2">
                                    <input id="floor_mode" type="radio" value="floor" name="sketch_mode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="go_to_floor_canvas()">
                                    <label for="floor_mode" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Floor Mode</label>
                                </div>
                            </div>
                            <div class="flex-1 flex justify-between bg-white px-4 py-4 rounded-xl gap-3 border">
                                <div class="relative">
                                    <select data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex items-center text-nowrap w-30 cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-slate-900 dark:border-gray-700",
                                        "optionClasses": "py-2 px-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-slate-100 dark:hover:bg-slate-800 dark:text-gray-200 dark:focus:bg-slate-800",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"font-semibold text-gray-800 dark:text-gray-200\" data-title></div></div><div class=\"mt-1.5 text-sm text-gray-500\" data-description></div></div>"
                                        }' class="hidden">
                                        <option value="1" selected data-hs-select-option='{
                                            "icon": "<i class=\"fa fa-home\"></i>"
                                        }'>Plot</option>

                                        <option value="2" data-hs-select-option='{
                                            "icon": "<i class=\"fa fa-male\"></i>"
                                        }'>Floor</option>
                                    </select>
                                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                        <i class="fa fa-angle-down text-rose-500"></i>
                                    </div>
                                </div>
                                <div class="color-picker mt-1">
                                    <input type="color" id="colorPicker" class="w-10 h-10 border border-gray-300 rounded-md" value="#D89455">
                                </div>
                                <button class="flex items-center gap-2 px-3 border rounded-3xl bg-gray-100 text-gray-300 hover:bg-black hover:text-white">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Floor</span>
                                </button>
                                <button class="flex items-center gap-2 px-3 border rounded-3xl bg-gray-100 text-gray-300 hover:bg-black hover:text-white">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Plot Objects</span>
                                </button>
                                <button class="flex items-center gap-2 px-3 border rounded-3xl bg-gray-100 text-gray-300 hover:bg-black hover:text-white">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Upper Floor</span>
                                </button>
                                <button class="flex items-center gap-2 px-3 border rounded-3xl bg-gray-100 text-gray-300 hover:bg-black hover:text-white">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Below Floor</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex pl-8 py-2 gap-5">
                            <div class="flex-auto justify-between flex bg-white px-4 py-4 rounded-xl gap-3 border">
                                <button class="add_plot flex border px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddPlot()">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add Plot</span>
                                </button>
                                <button class="add_plot flex border px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRect('road')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add corridor</span>
                                </button>
                                <button class="add_plot flex border px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRect('building')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add building</span>
                                </button>
                                <button class="add_plot flex border px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRect('external')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add Ext Room</span>
                                </button>
                                <button class="add_floor flex border bg-gray-300 px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRoom('normal')" >
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add Room</span>
                                </button>
                                <button class="add_floor flex border bg-gray-300 px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRoom('elevator')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add elevator</span>
                                </button>
                                <button class="add_floor flex border bg-gray-300 px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRoom('stair')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add stair</span>
                                </button>
                                <button class="add_floor flex border bg-gray-300 px-3 py-2 items-center gap-2 rounded-3xl" onclick="onAddRoom('stack')">
                                    <i class="fa fa-plus text-rose-500"></i>
                                    <span>Add S.Room</span>
                                </button>
                            </div>
                            <div class="bg-white px-8 py-2 rounded-l-xl border flex items-center justify-center">
                                <button class="bg-black text-white text py-3 px-4 rounded-full" onclick="back_to_add_project_data()">
                                    <i class="fa fa-cog text-xl" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex h-full w-full max-h-[calc(100vh-20rem)]  relative overflow-hidden">
                            <div class="flex-1 relative overflow-hidden flex flex-col px-8 py-2 gap-5 h-inherit">
                                <div class="w-full h-full max-h-[calc(100vh-30rem)]">
                                    <div class="flex gap-5 h-full w-full" id="canvas_panel">
                                        <div class="h-full rounded-xl border bg-white px-4 py-8 flex flex-col gap-8 text-rose-500 text-2xl items-center">
                                            <button id="btn_select">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-paper-plane"></i>
                                            </button>
                                            <button id="btn_fullscreen">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-up-right-and-down-left-from-center"></i>
                                            </button>
                                            <button id="btn_move">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-arrows-up-down-left-right"></i>
                                            </button>
                                            <button id="btn_pan" class="rounded-lg h-10 w-10 -m-2">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-hand"></i>
                                            </button>
                                            <button id="btn_delete">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-trash-can"></i>
                                            </button>
                                            <button id="btn_zoomin">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-magnifying-glass-plus"></i>
                                            </button>
                                            <button id="btn_zoomout">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-magnifying-glass-minus"></i>
                                            </button>
                                            <button id="btn_more" class="relative">
                                                <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-bars"></i>
                                            </button>
                                            <div class="absolute bottom-[85px] z-[1000] ml-[150px] hidden" id="operation_more">
                                                <div class="flex flex-col gap-3 bg-white border rounded-xl py-2 px-4 text-xl">
                                                    <div class="flex gap-5">
                                                        <button id="btn_rotate">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-undo"></i>
                                                        </button>
                                                        <button id="btn_copy">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-files-o"></i>
                                                        </button>
                                                        <button id="btn_paste">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-clipboard"></i>
                                                        </button>
                                                        <button id="btn_plus">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-plus-circle"></i>
                                                        </button>
                                                    </div>
                                                    <div class="flex gap-5">
                                                        <button id="btn_delete_all">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <button id="btn_multiple">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-server"></i>
                                                        </button>
                                                        <button id="btn_zoom">
                                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-magnifying-glass-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col bg-white border rounded-xl w-full overflow-hidden">
                                            <div class="flex p-2 justify-between items-center">
                                                <div class="flex gap-2 items-center justify-center">
                                                    <div type="text" class="flex-1">
                                                        <!-- <input id="floor_name" class="h-10 w-full border px-3" /> -->
                                                        <select data-te-select-init id="select_floor"></select>
                                                    </div>
                                                    <button onclick="change_floor(1)"
                                                        class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 h-10 w-10 hover:bg-rose-500 hover:text-white">
                                                        <i class="fa-solid fa-arrow-up"></i>
                                                    </button>
                                                    <button onclick="change_floor(-1)"
                                                        class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 h-10 w-10 hover:bg-rose-500 hover:text-white">
                                                        <i class="fa-solid fa-arrow-down"></i>
                                                    </button>
                                                    {{-- <button onclick="delete_floor()"
                                                        class="flex justify-center items-center rounded-md bg-rose-100 text-rose-500 h-10 w-10 hover:bg-rose-500 hover:text-white">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button> --}}
                                                </div>
                                                <div class="flex">
                                                    <button id="btn_undo"
                                                        class="h-fit rounded bg-white border px-8 py-3 mx-2 hover:bg-neutral-200">
                                                        Undo
                                                    </button>
                                                    <button id="btn_redo"
                                                        class="h-fit rounded bg-white border px-8 py-3 mx-2 hover:bg-neutral-200">
                                                        Redo
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex-1 h-inherit px-4 w-full overflow-auto">
                                                <div id="sketch_canvas_container"
                                                    class="border border-neutral-600 w-full h-full m-auto overflow-hidden">
                                                </div>
                                            </div>
                                            <div class="flex p-2 justify-between items-center">
                                                <div class="flex">
                                                    <div id="error_text"
                                                        class="hidden inline-flex w-fit items-center rounded-lg bg-rose-200 px-6 py-1 text-base text-[#FF0000]"
                                                        role="alert">
                                                        <span class="mr-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                                class="h-6 w-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                        <span id="alert_text">Error object crashing</span>
                                                    </div>
                                                </div>
                                                <div class="flex gap-5">
                                                    <div class="p-2 border rounded-md bg-gray-300 flex gap-5">
                                                        <p>Unused Area</p>
                                                        <p class="text-rose-500" id="unused_percent">30%</p>
                                                    </div>
                                                    <div class="p-2 border rounded-md bg-gray-300 flex gap-5">
                                                        <p>Corridor Area</p>
                                                        <p class="text-rose-500" id="corridor_percent">0%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-center mt-3 flex w-full pl-6 pr-8">
                                    <div class="flex justify-center items-center w-full justify-between relative">
                                        <div class="flex gap-3 p-4 rounded-xl bg-white border">
                                            <div class="p-2 rounded-md bg-gray-100 text-gray-500 hover:bg-white hover:text-black border flex items-center gap-2">
                                                <i class="fa fa-th-large text-2xl" aria-hidden="true"></i>
                                                Edge Snap
                                            </div>
                                            <div class="py-1.5 px-2.5 rounded-md bg-gray-100 text-gray-500 hover:bg-white hover:text-black border flex items-center gap-2">
                                                <i class="fa fa-list-alt text-2xl" aria-hidden="true"></i>
                                                Grid Snap
                                            </div>
                                            <div class="p-2 rounded-md bg-gray-100 text-gray-500 hover:bg-white hover:text-black border flex items-center gap-2">
                                                <i class="fa fa-list text-2xl" aria-hidden="true"></i>
                                                <p>Grid Lines</p>
                                                <p class="p-2 border rounded-md">20</p>
                                                <div class="color-picker mt-1">
                                                    <input type="color" id="colorPicker" class="w-10 h-10 border border-gray-300 rounded-md colorpicker" value="#000000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-2 px-4 py-6 rounded-xl bg-white border">
                                            <button class="p-3 rounded-md bg-rose-100 text-rose-500 hover:bg-rose-500 hover:text-white border">
                                                Union
                                            </button>
                                            <button class="p-3 rounded-md bg-rose-100 text-rose-500 hover:bg-rose-500 hover:text-white border">
                                                Subs
                                            </button>
                                            <button class="p-3 rounded-md bg-rose-100 text-rose-500 hover:bg-rose-500 hover:text-white border">
                                                Ints
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[450px] h-inherit flex flex-col items-end rounded-r-lg">
                                <div class="overflow-auto grid gap-3 px-6 py-2 mb-2 mt-1 grid-cols-2 rounded-l-xl shadow plot_panel bg-white">
                                    <div class="col-span-2">
                                        <p>Property Panel</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-rose-500">ID:</p>
                                    </div>
                                    <div class="col-span-1">
                                        <input type="text" id="property_id" name="property_id" required="" value="" 
                                            class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2" readonly>
                                    </div>
                                    <hr class="col-span-2 my-0 -mx-6" />
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-rose-500">Type:</p>
                                    </div>
                                    <div class="col-span-1">
                                        <input type="text" id="property_type" name="property_type" required="" value="" 
                                            class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2" readonly>
                                    </div>
                                    <hr class="col-span-2 my-0 -mx-6" />
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-rose-500">Parent:</p>
                                    </div>
                                    <div class="col-span-1">
                                        <input type="text" id="property_parent" name="property_parent" required="" value="" 
                                            class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2" readonly>
                                    </div>
                                    <hr class="col-span-2 my-0 -mx-6" />
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-rose-500">Name:</p>
                                    </div>
                                    <div class="col-span-1">
                                        <input type="text" id="property_name" name="property_name" required="" value="" 
                                            class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2" readonly>
                                    </div>
                                    <hr class="col-span-2 my-0 -mx-6" />
                                    <div class="col-span-2">
                                        <div id="properties_panel" class="mt-3 p-2 w-full grid gap-4 grid-cols-2">
                                            <div class="col-span-2 md:col-span-1">
                                                <label for="length" class="block mb-2 text-rose-500">Length(m)
                                                </label>
                                                <input type="number" name="length" required="" id="length" value="40"
                                                    class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                                            </div>
                                            <div class="col-span-2 md:col-span-1">
                                                <label for="width" class="block mb-2 text-rose-500">Width(m)
                                                </label>
                                                <input type="number" name="width" required="" id="width" value="30"
                                                    class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                                            </div>
                                            <div class="col-span-2 md:col-span-1">
                                                <label for="x_pos" class="block mb-2 text-rose-500">X Pos(m)
                                                </label>
                                                <input type="number" name="x_pos" required="" id="x_pos" value="0"
                                                    class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                                            </div>
                                            <div class="col-span-2 md:col-span-1">
                                                <label for="y_pos" class="block mb-2 text-rose-500">Y Pos(m)
                                                </label>
                                                <input type="number" name="y_pos" required="" id="y_pos" value="0"
                                                    class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto w-full h-[200px] flex flex-col gap-3 px-6 py-2 mt-1 rounded-tl-xl rounded-br-lg shadow floor_panel bg-white">
                                    <div class="flex justify-between">
                                        <p>Floors Panel</p>
                                        <button class="flex gap-2 px-5 py-2 bg-black text-white items-center rounded-md">
                                            <i class="hover:text-rose-600 hover:underline underline-offset-8 fa-solid fa-files-o"></i>
                                            <p>Duplicate</p>
                                        </button>
                                    </div>
                                    <div class="flex justify-between">
                                        <button class="floor_btn flex border bg-gray-300 text-md px-2 py-2 items-center gap-2 rounded-3xl">
                                            <i class="fa fa-plus text-rose-500"></i>
                                            <span>Add Basement</span>
                                        </button>
                                        <button class="floor_btn flex border bg-gray-300 text-md px-2 py-2 items-center gap-2 rounded-3xl" onclick="onAddRoom('floor')">
                                            <i class="fa fa-plus text-rose-500"></i>
                                            <span>Add Floor</span>
                                        </button>
                                        <div class="floor_btn flex gap-2 p-2 rounded-full border bg-gray-300">
                                            <label for="is_roof_floor" class="flex items-center cursor-pointer select-none text-dark dark:text-white">
                                                <div class="relative">
                                                    <input id="is_roof_floor" type="checkbox" class="peer sr-only"/>
                                                    <div class="h-3 rounded-full shadow-inner bg-rose-300 dark:bg-dark-2 w-9"></div>
                                                    <div class="absolute left-0 transition bg-gray-600 rounded-full dot shadow-switch-1 dark:bg-dark-4 -top-1 h-5 w-5 peer-checked:translate-x-full peer-checked:bg-rose-500"></div>
                                                </div>
                                            </label>
                                            <span>Add Roof</span>
                                        </div>
                                    </div>
                                    <div class="hidden" id="main_floor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode hidden" id="zoning_model">
                        <div class="p-8">
                            <div class="flex flex-between w-full bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="flex">
                                    <P class="text-xl">Zoning Model</p>
                                </div>
                                <div class="flex">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode hidden" id="detailed_model">
                        <div class="p-8">
                            <div class="flex flex-between w-full bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="flex">
                                    <P class="text-xl">Detailed Model</p>
                                </div>
                                <div class="flex">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode hidden" id="pdf_dwgs">
                        <div class="p-8">
                            <div class="flex flex-between w-full bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="flex">
                                    <P class="text-xl">PDF Files</p>
                                </div>
                                <div class="flex">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode hidden" id="dwg_files">
                        <div class="p-8">
                            <div class="flex flex-between w-full bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="flex">
                                    <P class="text-xl">DWG Files</p>
                                </div>
                                <div class="flex">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full w-[100px] screen-mode hidden" id="reports">
                        <div class="p-8">
                            <div class="flex flex-between w-full bg-white px-4 py-4 rounded-xl gap-3 justify-between border">
                                <div class="flex">
                                    <P class="text-xl">Reports</p>
                                </div>
                                <div class="flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script>
    var new_project_mode;
    var sketch_board = null;
    var current_floor = 0;
    var current_building = null;
    var autosave = false;
    
    function close_create_project_modal() {
        window.location.reload();
    }

    function select_mode(mode) {
        new_project_mode = mode;
        // $('#select_mode').hide();
        $('#add_project_data').show();
        $('#sketch_canvas').hide();
        var data = localStorage.getItem('project_data');
        if (data) {
            var project_data = JSON.parse(data)
            $('#project_name').val(project_data.project_name),
            $('#description').val(project_data.description),
            $('#client_name').val(project_data.client_name),
            $('#project_number').val(project_data.project_number),
            $('#address').val(project_data.address),
            $('#plot_number').val(project_data.plot_number)
        }
    }

    $("#docking_bar").on('mouseover', function() {
        $("#docking_normal").addClass('hidden');
        $("#docking_expand").removeClass('hidden');
    })
    
    $("#docking_bar").on('mouseleave', function() {
        $("#docking_normal").removeClass('hidden');
        $("#docking_expand").addClass('hidden');
    })

    //*-------------------Move Page(2024-01-14)------------------------*/
    function back_to_select_mode() {
        $('#add_project_data').hide();
        $('#select_mode').show();
    }

    function back_to_add_project_data() {
        $('#sketch_canvas').hide();
        $('#add_project_data').show();
    }

    function back_to_plot_sketch_canvas() {
        sketch_board.set_canvas_mode(true);
        $(".add_floor").addClass('bg-gray-300');
        $(".add_plot").removeClass('bg-gray-300');
        $(".floor_btn").addClass('bg-gray-300');
        $(".floor_input").parent().remove();
        
        $("#plot_current_parent").removeClass('hidden');
        $("#floor_current_parent").addClass('hidden');
    }

    function go_to_floor_canvas() {
        if (sketch_board == null) {
            alert('Please add plot');
            document.getElementById("plot_mode").checked = true;
            document.getElementById("floor_mode").checked = false;
            return;
        }
        if (sketch_board.has_error) {
            alert('Please fix object crashing error.');
            document.getElementById("plot_mode").checked = true;
            document.getElementById("floor_mode").checked = false;
            return;
        }
        if (sketch_board.buildings.length == 0) {
            alert('Please at least one building');
            document.getElementById("plot_mode").checked = true;
            document.getElementById("floor_mode").checked = false;
            return;
        }

        $(".add_floor").removeClass('bg-gray-300');
        $(".add_plot").addClass('bg-gray-300');
        $(".floor_btn").removeClass('bg-gray-300');
        $("#plot_current_parent").addClass('hidden');
        $("#floor_current_parent").removeClass('hidden');

        sketch_board.set_canvas_mode(false);

        $('#select_building').html('');
        for (let i = 0; i < sketch_board.buildings.length; i++) {
            var txt = sketch_board.buildings[i].text;
            $('#select_building').append(`<option value="${i}">${txt}</option>`);
        }
        
        onSelectBuilding();
        $('#select_building').off('change');
        $('#select_building').on('change', () => { onSelectBuilding() });
        $('#select_building').addClass('hidden');
        $('#floor_name').off('change');
        $('#floor_name').on('change', (e) => {
            current_building.floors[current_floor] = e.target.value;
        })
    }

    /*-------------------------------------------------------------------*/

    function submit_project_data(mode) {
        if(mode == 1) {
            var project_data = {
                    project_name: $('#project_name').val(),
                    description: $('#description').val(),
                    client_name: $('#client_name').val(),
                    project_number: $('#project_number').val(),
                    address: $('#address').val(),
                    plot_number: $('#plot_number').val(),
                    floor_left: parseInt($('#floor_left').text()),
                    plot_left: parseInt($('#plot_left').text()),
                    rooms_left: parseInt($('#rooms_left').text()),
                    buildings_left: parseInt($('#buildings_left').text()),
            };
            localStorage.setItem('project_data', JSON.stringify(project_data));
            $("#project_name_display").text($("#project_name").val());
            $("#project_name_edit").val($("#project_name").val());
        } else {
            $("#project_name_display").text(JSON.parse(localStorage.getItem("project_data")).project_name);
            $("#project_name_edit").val(JSON.parse(localStorage.getItem("project_data")).project_name);
        }

        if (new_project_mode == 'Data') {
            $.ajax({
                url: "{{ route('admin.add.project') }}",
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    mode: new_project_mode,
                    project_name: $('#project_name').val(),
                    description: $('#description').val(),
                    location: $('#address').val()
                },
                success: function(data) {
                    if (data.result == 'success') {
                        close_create_project_modal();
                    } else {

                    }
                }
            });
        } else {
            $('#add_project_data').hide();
            $('#sketch_canvas').show();

            var data = localStorage.getItem('canvas_data');
            if (data) {
                data = JSON.parse(data);
                sketch_board = new KonvaSketch({
                    container: 'sketch_canvas',
                    width: data.width,
                    height: data.height,
                    on_mode_changed: (plot_canvas) => {
                        if (plot_canvas) back_to_plot_sketch_canvas();
                        else go_to_floor_canvas();
                    },
                    on_select_building: (id, floor) => {
                        $('#select_building').html('');
                        for (let i = 0; i < sketch_board.buildings.length; i++) {
                            var txt = sketch_board.buildings[i].text;
                            $('#select_building').append(`<option value="${i}">${txt}</option>`);
                        }
                        $('#select_building').val(id);
                        $('#select_building')[0].dispatchEvent(new Event('change'));
                        onSelectBuilding();
                        change_floor(floor);
                    },
                    json: data.stage,
                    buildings: data.buildings
                })
            }
            
            if(mode == 3) {
                sketch_board = new KonvaSketch({
                    container: 'sketch_canvas',
                    width: 800,
                    height: 600,
                    on_mode_changed: (plot_canvas) => {
                        if (plot_canvas) back_to_plot_sketch_canvas();
                        else go_to_floor_canvas();
                    },
                    on_select_building: (id, floor) => {
                        $('#select_building').html('');
                        for (let i = 0; i < sketch_board.buildings.length; i++) {
                            var txt = sketch_board.buildings[i].text;
                            $('#select_building').append(`<option value="${i}">${txt}</option>`);
                        }
                        $('#select_building').val(id);
                        $('#select_building')[0].dispatchEvent(new Event('change'));
                        onSelectBuilding();
                        change_floor(floor);
                    },
                });
                
                sketch_board = null;
                var current_floor = 0;
                var current_building = null;
                var autosave = false;
                $('#length').val() = 40;
                $('#height').val() = 30;
            }
            
        }
    }
    
    //*-------------------Edit Project(2024-01-14)------------------------*/
    function editProject() {
        var project_data = JSON.parse(localStorage.getItem("project_data"));
        $("#project_name_display").hide();
        $("#project_name_edit").val($("#project_name_display").text());
        $("#project_name_edit").show();

        $("#floor_left").hide();
        $("#floor_left_edit").val(parseInt($("#floor_left").text()));
        $("#floor_left_edit").show();
        
        $("#plot_left").hide();
        $("#plot_left_edit").val(parseInt($("#plot_left").text()));
        $("#plot_left_edit").show();

        $("#rooms_left").hide();
        $("#rooms_left_edit").val(parseInt($("#rooms_left").text()));
        $("#rooms_left_edit").show();
        
        $("#buildings_left").hide();
        $("#buildings_left_edit").val(parseInt($("#buildings_left").text()));
        $("#buildings_left_edit").show();
        
    }

    function save_project_info() {
        var project_data = JSON.parse(localStorage.getItem("project_data"));

        var new_project_data = {
                project_name: $("#project_name_edit").val(),
                description: project_data.description,
                client_name: project_data.client_name,
                project_number: project_data.project_number,
                address: project_data.address,
                plot_number: project_data.plot_number,
                floor_left: $("#floor_left_edit").val(),
                plot_left: $("#plot_left_edit").val(),
                rooms_left: $("#rooms_left_edit").val(),
                buildings_left: $("#buildings_left_edit").val(),
            };
        localStorage.setItem('project_data', JSON.stringify(new_project_data));

        $("#project_name_display").text($("#project_name_edit").val());
        $("#project_name_display").show();
        $("#project_name_edit").hide();
        
        $("#floor_left").text($("#floor_left_edit").val());
        $("#floor_left").show();
        $("#floor_left_edit").hide();
        
        $("#plot_left").text($("#plot_left_edit").val());
        $("#plot_left").show();
        $("#plot_left_edit").hide();
        
        $("#rooms_left").text($("#rooms_left_edit").val());
        $("#rooms_left").show();
        $("#rooms_left_edit").hide();

        $("#buildings_left").text($("#buildings_left_edit").val());
        $("#buildings_left").show();
        $("#buildings_left_edit").hide();
    }

    function onAutoSave() {
        if(document.getElementById("autosave_toggle").checked)  autosave = true;
        else autosave = false;

        if(autosave) addEvent();
        else removeEvent();
    }

    function addEvent() {
        $("#project_name_edit").on('change', function() {
            var project_data = JSON.parse(localStorage.getItem("project_data"));
            var new_project_data = {
                    project_name: $("#project_name_edit").val(),
                    description: project_data.description,
                    client_name: project_data.client_name,
                    project_number: project_data.project_number,
                    address: project_data.address,
                    plot_number: project_data.plot_number,
                    floor_left: project_data.plot_number,
                    plot_left: project_data.plot_number,
                    rooms_left: project_data.plot_number,
                    buildings_left: project_data.plot_number,
                };
            localStorage.setItem('project_data', JSON.stringify(new_project_data));
        });
        
        $("#floor_left_edit").on('change', function() {
            var project_data = JSON.parse(localStorage.getItem("project_data"));
            var new_project_data = {
                    project_name: project_data.project_name,
                    description: project_data.description,
                    client_name: project_data.client_name,
                    project_number: project_data.project_number,
                    address: project_data.address,
                    plot_number: project_data.plot_number,
                    floor_left: $("#floor_left_edit").val(),
                    plot_left: project_data.plot_number,
                    rooms_left: project_data.plot_number,
                    buildings_left: project_data.plot_number,
                };
            localStorage.setItem('project_data', JSON.stringify(new_project_data));
        });
        
        $("#plot_left_edit").on('change', function() {
            var project_data = JSON.parse(localStorage.getItem("project_data"));
            var new_project_data = {
                    project_name: project_data.project_name,
                    description: project_data.description,
                    client_name: project_data.client_name,
                    project_number: project_data.project_number,
                    address: project_data.address,
                    plot_number: project_data.plot_number,
                    floor_left: project_data.plot_number,
                    plot_left: $("#plot_left_edit").val(),
                    rooms_left: project_data.plot_number,
                    buildings_left: project_data.plot_number,
                };
            localStorage.setItem('project_data', JSON.stringify(new_project_data));
        });
        
        $("#rooms_left_edit").on('change', function() {
            var project_data = JSON.parse(localStorage.getItem("project_data"));
            var new_project_data = {
                    project_name: project_data.project_name,
                    description: project_data.description,
                    client_name: project_data.client_name,
                    project_number: project_data.project_number,
                    address: project_data.address,
                    plot_number: project_data.plot_number,
                    floor_left: project_data.plot_number,
                    plot_left: project_data.plot_number,
                    rooms_left: $("#rooms_left_edit").val(),
                    buildings_left: project_data.plot_number,
                };
            localStorage.setItem('project_data', JSON.stringify(new_project_data));
        });
        
        $("#buildings_left_edit").on('change', function() {
            var project_data = JSON.parse(localStorage.getItem("project_data"));
            var new_project_data = {
                    project_name: project_data.project_name,
                    description: project_data.description,
                    client_name: project_data.client_name,
                    project_number: project_data.project_number,
                    address: project_data.address,
                    plot_number: project_data.plot_number,
                    floor_left: project_data.plot_number,
                    plot_left: project_data.plot_number,
                    rooms_left: project_data.plot_number,
                    buildings_left: $("#buildings_left_edit").val(),
                };
            localStorage.setItem('project_data', JSON.stringify(new_project_data));
        });
    }

    function removeEvent() {
        $("#project_name_edit").off('change');
        $("#floor_left_edit").off('change');
        $("#project_name_edit").off('change');
        $("#rooms_left_edit").off('change');
        $("#buildings_left_edit").off('change');
    }
    /*-------------------------------------------------------------------*/

    //*-------------------Add(2024-01-14)------------------------*/
    function onAddPlot() {
        if($(".add_plot").hasClass("bg-gray-300")) return;
        if (sketch_board != null) {
            alert('Cannot add more than one plot.');
            return ;
        }

        var width = parseFloat($('#length').val());
        var height = parseFloat($('#width').val());
        if (width == 0 || height == 0) {
            alert('Please input correct size.');
            return;
        }
        

        var sub_type = $('#plot_type option:selected').text();
        sketch_board = new KonvaSketch({
            container: 'sketch_canvas',
            width: width * 2,
            height: height * 2,
            on_mode_changed: (plot_canvas) => {
                if (plot_canvas) back_to_plot_sketch_canvas();
                else go_to_floor_canvas();
            },
            on_select_building: (id, floor) => {
                $('#select_building').html('');
                for (let i = 0; i < sketch_board.buildings.length; i++) {
                    var txt = sketch_board.buildings[i].text;
                    $('#select_building').append(`<option value="${i}">${txt}</option>`);
                }
                $('#select_building').val(id);
                $('#select_building')[0].dispatchEvent(new Event('change'));
                onSelectBuilding();
                change_floor(floor);
            }
        });

        onAddRect('plot');
    }

    function onAddRect(type) {
        if($(".add_plot").hasClass('bg-gray-300'))  return;
        if (sketch_board == null) return;
        if (type == 'plot') {
            if (sketch_board.layer.find('.plot').length > 0) {
                alert('Cannot add more than one plot.');
                return ;
            }
        }
        if (type == 'building' || type == 'external') {
            if (sketch_board.layer.find('.plot').length == 0) {
                alert('Please add a plot first.');
                return ;
            }
            sketch_board.set_parent(sketch_board.plot);
        }
        else {
            sketch_board.set_parent(null);
        }
        var width = parseFloat(sketch_board.width_input.val());
        var height = parseFloat(sketch_board.height_input.val());
        if (width == 0 || height == 0 || sketch_board.get_width() < width || sketch_board.get_height() < height) {
            alert('Please input correct size.');
            return;
        }
        var sub_type = type;
        if (type != 'neighbor' && type != 'road') sub_type = type;
        var name;
        if (type == 'building' || type == 'external') name = 'rect node ' + type;
        else name = 'rect primary ' + type;
        
        sketch_board.addRect(width, height, name, sub_type);
    }

    function onAddRoom(type) {
        if($(".add_floor").hasClass("bg-gray-300")) return;
        if (type == 'floor') {
            onSelectFloor(current_building.floors.length);
            return ;
        }
        
        var width = parseFloat(sketch_board.width_input.val());
        var height = parseFloat(sketch_board.height_input.val());
        if (sketch_board.width < width || sketch_board.height < height) {
            alert('Please input correct size.');
            return;
        }

        name = 'rect room ' + type;
        if (type == 'normal') sub_type = `${current_building.id}_floor_${current_floor}_Room`;
        else if (type == 'elevator') sub_type = `${current_building.id}_stack_${current_floor}_Elevator`;
        else if (type == 'stair') sub_type = `${current_building.id}_stack_${current_floor}_Stair`;
        else sub_type = `${current_building.id}_stack_room`;

        var nodes = sketch_board.addRect(width, height, name, sub_type);
    }
    /*-------------------------------------------------------------------*/

    function onSelectBuilding() {
        current_building = sketch_board.buildings[$('#select_building').val()]
        sketch_board.set_parent_by_id(current_building.id);
        // console.log('onSelectBuilding', current_building.id, sketch_board.parent_node);

        $('#select_floor').html('');
        $(".floor_sets").remove();
        for (let floor = 0; floor < current_building.floors.length; floor ++) {
            $('#select_floor').append(`<option value='${floor}'>Floor ${floor + 1}</option>`);
            var txt = "<div class='floor_sets flex justify-between items-center gap-2 border rounded-md px-2 py-1'>\
                    <input type='checkbox' id='floor_check_" + floor +"' class='text-rose-500' />\
                    <input type='text' name='' required='' value='' placeholder='Type' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <input type='text' name='' required='' value='' placeholder='Floor#' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <input type='text' name='' required='' value='" + current_building.floors[floor] + "' placeholder='Floor Name' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <i id='floor_delete_" + floor +"' class='fa fa-times text-rose-500 border rounded-3xl border-rose-500 px-1 py-0.5' aria-hidden='true'></i>\
                    </div>";
            $("#main_floor").before(txt);
        }
        onSelectFloor(0);
        $('#select_floor').off('change');
        $('#select_floor').on('change', (e) => {
            onSelectFloor(e.target.value);
        });
        $('#is_roof_floor').off('change');
        $('#is_roof_floor').on('change', (e) => {
            if (e.target.checked) current_building.roof_floor = current_floor;
            else current_building.roof_floor = -1;
        })
    }

    function change_floor(dir) {
        var floor = parseInt($('#select_floor').val()) + parseInt(dir);
        if (floor < 0 || floor >= current_building.floors.length) return ;
        $('#select_floor').html('');
        for (let floor = 0; floor < current_building.floors.length; floor ++) {
            $('#select_floor').append(`<option value='${floor}'>Floor ${floor + 1}</option>`);
        }
        onSelectFloor(floor);
        $('#select_floor').val(floor);
        $('#select_floor')[0].dispatchEvent(new Event('change'));
    }

    function delete_floor() {
        var floor = $('#select_floor').val();
    }

    function onSelectFloor(floor) {
        if (current_building.floors.length <= floor) {
            $('#select_floor').append(`<option value='${floor}'>Floor ${floor + 1}</option>`);
            current_building.floors.push(`Floor ${floor + 1}`);
            $('#select_floor').val(floor);
            current_building.roof_floor = floor;
            sketch_board.addRect(0, 0, 'floor', `${current_building.id}_floor_${floor}`);
            var txt = "<div class='floor_sets flex justify-between items-center gap-2 border rounded-md px-2 py-1'>\
                    <input type='checkbox' id='floor_check_" + floor +"' class='text-rose-500' />\
                    <input type='text' name='' required='' value='' placeholder='Type' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <input type='text' name='' required='' value='' placeholder='Floor#' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <input type='text' name='' required='' value='" + current_building.floors[floor] + "' placeholder='Floor Name' \
                    class='floor_input w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2'>\
                    <i id='floor_delete_" + floor +"' class='fa fa-times text-rose-500 border rounded-3xl border-rose-500 px-1 py-0.5' aria-hidden='true'></i>\
                    </div>";
            $("#main_floor").before(txt);
        }
        current_floor = floor;
        
        $('#floor_name').val(current_building.floors[floor]);
        $('#is_roof_floor')[0].checked = current_building.roof_floor == floor;
        sketch_board.select_floor(floor);
    }

    //*-------------------Sven Volger(2024-01-12)------------------------*/
    function onToggleScreen(mode) {
        //toggle screen mode
        $(".screen-mode").addClass('hidden');
        $("#"+ mode).removeClass('hidden');

        //file download option toggle
        if(mode != "zoning_plan")   $("#download_setting").addClass('hidden');
        else $("#download_setting").removeClass('hidden');
    }

    $("#download_setting_btn").on('click', function() {
        $("#download_setting_modal").toggle('hidden');
    })

    /*-------------------------------------------------------------------*/
    
    function onGenerate() {
        // var project_data = {
        //     project_name: $('#project_name').val(),
        //     description: $('#description').val(),
        //     client_name: $('#client_name').val(),
        //     project_number: $('#project_number').val(),
        //     address: $('#address').val(),
        //     plot_number: $('#plot_number').val()
        // };
        
        // var primaries = sketch_board.layer.find('.primary');
        // var nodes = sketch_board.layer.find('.node');
        // var rooms = sketch_board.layer.find('.room');
        // var objects = [];
        // // plot & roads & neighbors
        // primaries.forEach(element => {
        //     objects.push({
        //         "Object Name": sketch_board.get_label(element),
        //         "Object ID": element._id,
        //         "Parent ID": null,
        //         "Ext Points List": sketch_board.get_ext_points(element),
        //         "SVG B64str": sketch_board.createSvg(element),
        //         "Family Class": element.name().split(' ').pop(),
        //         "Family Type": sketch_board.get_sub_type(element),
        //         "Area": sketch_board.get_area(element)
        //     })
        // })
        // // buildings & external rooms
        // nodes.forEach(element => {
        //     objects.push({
        //         "Object Name": sketch_board.get_label(element),
        //         "Object ID": element._id,
        //         "Parent ID": sketch_board.plot._id,
        //         "Ext Points List": sketch_board.get_ext_points(element),
        //         "SVG B64str": sketch_board.createSvg(element),
        //         "Family Class": element.name().split(' ').pop(),
        //         "Family Type": sketch_board.get_sub_type(element),
        //         "Area": sketch_board.get_area(element)
        //     })
        // })
        // var floor_ids = {}
        // // floors
        // sketch_board.buildings.forEach(building => {
        //     let rect = sketch_board.get_node_by_id(building.id);
        //     building.floors.forEach((floor, index) => {
        //         let floor_id = floor_ids[`${building.id}_floor_${index}`] = sketch_board.get_node_by_id(`${building.id}_floor_${index}`)._id;
        //         objects.push({
        //             "Object Name": floor,
        //             "Object ID": floor_id,
        //             "Parent ID": rect._id,
        //             "Ext Points List": sketch_board.get_ext_points(rect),
        //             "SVG B64str": sketch_board.createSvg(rect),
        //             "Family Class": "Floor",
        //             "Family Type": building.roof_floor == index ? "roof" : "normal",
        //             "Area": sketch_board.get_area(rect),
        //             "Type Properties": {
        //                 "Floor No": index + 1
        //             }
        //         })
        //     })
        // })
        // // rooms
        
        // rooms.forEach(room => {
        //     if (room.hasName('stack')) {
        //         objects.push({
        //             "Object Name": sketch_board.get_label(room),
        //             "Object ID": room._id,
        //             "Parent ID": sketch_board.get_node_by_id(room.id().split('_stack_')[0])._id,
        //             "Ext Points List": sketch_board.get_ext_points(room),
        //             "SVG B64str": sketch_board.createSvg(room),
        //             "Family Class": "stack room",
        //             "Family Type": sketch_board.get_sub_type(room),
        //             "Area": sketch_board.get_area(room)
        //         })
        //     }
        //     else {
        //         var index2 = rooms[0].id().split('_floor_')[1].split('_')[0]
        //         objects.push({
        //             "Object Name": sketch_board.get_label(room),
        //             "Object ID": room._id,
        //             "Parent ID": floor_ids[`${room.id().split('_floor_')[0]}_floor_${index2}`],
        //             "Ext Points List": sketch_board.get_ext_points(room),
        //             "SVG B64str": sketch_board.createSvg(room),
        //             "Family Class": "normal room",
        //             "Family Type": sketch_board.get_sub_type(room),
        //             "Area": sketch_board.get_area(room)
        //         })
        //     }
        // })
        var project_data = localStorage.getItem('project_data');
        var canvas_data = localStorage.getItem('canvas_data');
        // const blob = new Blob([JSON.stringify({
        //     project_data,
        //     objects
        // })], { type: 'application/json' });
        const blob = new Blob([JSON.stringify({
            project_data,
            canvas_data
        })], { type: 'application/json' });

        // Create a download link
        const link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.download = 'data.json';

        // Append the link to the document
        document.body.appendChild(link);

        // Trigger a click on the link to initiate the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);

        // localStorage.removeItem('project_data');
        // localStorage.removeItem('canvas_data');
    }

    $("#json_upload_btn").on('click', function() {
        document.getElementById("json_upload_input").click();
    });

    $("#json_upload_input").on('change', function() {
        var file = this.files[0];
        if (file && file.type === "application/json") {
        var reader = new FileReader();

        reader.onload = function(e) {
            var content = e.target.result;

            try {
                var json = JSON.parse(content);
                // Storing the JSON data in localStorage
                localStorage.setItem('project_data', json.project_data);
                localStorage.setItem('canvas_data', json.canvas_data);
                submit_project_data(2);
                console.log('JSON data stored in localStorage');
                $(this).val();
            } catch (error) {
                console.log('Error parsing JSON:' + error);
            }
        };

        reader.readAsText(file);
        console.log(reader);
    } else {
        console.error('Please upload a valid JSON file.');
    }
    });

    $("#btn_more").on('click', function() {
        $("#operation_more").toggle('hidden');
    })
    
    $("#btn_delete_all").on('click', function() {
        localStorage.removeItem("canvas_data");
        submit_project_data(3);
    })
</script>
