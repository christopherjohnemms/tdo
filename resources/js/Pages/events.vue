<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Events
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert" v-if="$page.flash.message">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ $page.flash.message }}</p>
                            </div>
                        </div>
                    </div>
                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Event</button>
                    <h2 class="text-lg font-semibold underline mt-10 mb-5">January</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
<!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in january">
<!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>



                    <h2 class="text-lg font-semibold underline mt-10 mb-5">February</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in february">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>



                    <h2 class="text-lg font-semibold underline mt-10 mb-5">March</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in march">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>



                    <h2 class="text-lg font-semibold underline mt-10 mb-5">April</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in april">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">May</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in may">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">June</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in june">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">July</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in july">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">August</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in august">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">September</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in september">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold underline mt-10 mb-5">October</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in october">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>


                    <h2 class="text-lg font-semibold underline mt-10 mb-5">November</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in november">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>



                    <h2 class="text-lg font-semibold underline mt-10 mb-5">December</h2>
                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <!--                            <th class="px-4 py-2 w-20">ID.</th>-->
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Event Name</th>
                            <th class="px-4 py-2">Event Location</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in december">
                            <!--                            <td class="border px-4 py-2">{{ // row.id }}</td>-->
                            <td class="border px-4 py-2" style="text-transform:capitalize;">{{ camelize(row.type) }}</td>
                            <td class="border px-4 py-2">{{ row.day }}</td>
                            <td class="border px-4 py-2">{{ row.event_title }}</td>
                            <td class="border px-4 py-2">{{ row.event_location }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                            <div class="fixed inset-0 transition-opacity">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <form>
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="">

                                            <div class="flex justify-center">
                                                <div class="mb-4 flex-1 ">
                                                    <label for="exampleFormControlInput0" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                                                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="exampleFormControlInput0"  v-model="form.type">
                                                        <option value="holidays">Holidays</option>
                                                        <option value="club_gradings">Club Gradings</option>
                                                        <option value="competitions">Competitions</option>
                                                        <option value="tagb_courses">TAGB Courses</option>
                                                    </select>
                                                    <div v-if="$page.errors.type" class="text-red-500">{{ $page.errors.type[0] }}</div>
                                                </div>
                                                <div class="mb-4 ml-4 flex-1">
                                                    <label for="exampleFormControlInput10" class="block text-gray-700 text-sm font-bold mb-2">Month:</label>
                                                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                            id="exampleFormControlInput10"  v-model="form.month">
                                                        <option value="january">January</option>
                                                        <option value="february">February</option>
                                                        <option value="march">March</option>
                                                        <option value="april">April</option>
                                                        <option value="may">May</option>
                                                        <option value="june">June</option>
                                                        <option value="july">July</option>
                                                        <option value="august">August</option>
                                                        <option value="september">September</option>
                                                        <option value="october">October</option>
                                                        <option value="november">November</option>
                                                        <option value="december">December</option>
                                                    </select>
                                                    <div v-if="$page.errors.month" class="text-red-500">{{ $page.errors.month[0] }}</div>
                                                </div>
                                            </div>


                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Event Day:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Day (i.e 2nd)" v-model="form.day">
                                                <div v-if="$page.errors.day" class="text-red-500">{{ $page.errors.day[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Event Title:</label>
                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" v-model="form.event_title" placeholder="Enter Event Title"></textarea>
                                                <div v-if="$page.errors.event_title" class="text-red-500">{{ $page.errors.event_title[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Event Location:</label>
                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput3" v-model="form.event_location" placeholder="Enter Location (Leave blank for Holidays)"></textarea>
                                                <div v-if="$page.errors.event_location" class="text-red-500">{{ $page.errors.event_location[0] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="!editMode" @click="save(form)">
                                Save
                              </button>
                            </span>
                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="editMode" @click="update(form)">
                                Update
                              </button>
                            </span>
                                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

                              <button @click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Cancel
                              </button>
                            </span>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'
    import Welcome from './../Jetstream/Welcome'
    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: ['data',
            'january',
            'february',
            'march',
            'april',
            'may',
            'june',
            'july',
            'august',
            'september',
            'october',
            'november',
            'december',
            'errors'],
        data() {
            return {
                editMode: false,
                isOpen: false,
                form: {
                    type: null,
                    day: null,
                    month: null,
                    event_title: null,
                    event_location: null,
                },
            }
        },
        methods: {
            openModal: function () {
                this.isOpen = true;
            },
            closeModal: function () {
                this.isOpen = false;
                this.reset();
                this.editMode=false;
            },
            reset: function () {
                this.form = {
                    type: null,
                    day: null,
                    month: null,
                    event_title: null,
                    event_location: null,
                }
            },
            save: function (data) {
                this.$inertia.post('/events', data);
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            edit: function (data) {
                this.form = Object.assign({}, data);
                this.editMode = true;
                this.openModal();
            },
            update: function (data) {
                data._method = 'PUT';
                this.$inertia.post('/events/' + data.id, data);
                this.reset();
                this.closeModal();
            },
            deleteRow: function (data) {
                if (!confirm('Are you sure want to remove?')) return;
                data._method = 'DELETE';
                this.$inertia.post('/events/' + data.id, data);
                this.reset();
                this.closeModal();
            },
            camelize: function (dasherizedStr) {
                return dasherizedStr.split('_').join(' ');
            }
        }
    }
</script>
