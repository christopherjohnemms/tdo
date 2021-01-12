<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Gradings
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
                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Grading Sheet</button>

                    <table class="table-fixed w-full my-1">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2" style="width:50px;">Order</th>
                            <th class="px-4 py-2" style="width:150px;">Type</th>
                            <th class="px-4 py-2" style="width:150px;">Name</th>
                            <th class="px-4 py-2" style="width:150px;">File</th>
                            <th class="px-4 py-2" style="width:190px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="row in data">
                            <td class="border px-4 py-2"> {{ row.order }}</td>

                            <td class="border px-4 py-2">
                                {{ row.type == 'grading_theory_sheets' ? "Grading Theory Sheets" :
                                    row.type == 'tigers_grading_sheets' ? "Tigers Grading Sheets" :
                                    row.type == "pattern_sheets" ? "Pattern Sheets" :
                                    row.type == "black_belt_syllabus" ? "Black Belt Syllabus" : "Unknown Type"
                                 }}
                            </td>
                            <td class="border px-4 py-2"> {{ row.name }}</td>
                            <td class="border px-4 py-2"><a :href="'/images/uploads/' + row.file" target="_blank" style="width:35px; margin:0 auto; display: block"><img src="/images/pdf.svg" /></a></td>
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
                                <form enctype="multipart/form-data">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="">
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Order:</label>
                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput31" v-model="form.order" placeholder="Ordering Number (i.e 2)"></textarea>
                                                <div v-if="$page.errors.order" class="text-red-500">{{ $page.errors.order[0] }}</div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="exampleFormControlInput10" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="exampleFormControlInput10"  v-model="form.type">
                                                    <option value="grading_theory_sheets">Grading Theory Sheets</option>
                                                    <option value="tigers_grading_sheets">Tigers Grading Sheets</option>
                                                    <option value="pattern_sheets">Pattern Sheets</option>
                                                    <option value="black_belt_syllabus">Black Belt Syllabus</option>
                                                </select>
                                                <div v-if="$page.errors.type" class="text-red-500">{{ $page.errors.type[0] }}</div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput3" v-model="form.name" placeholder="Enter Name"></textarea>
                                                <div v-if="$page.errors.name" class="text-red-500">{{ $page.errors.name[0] }}</div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="chooseFile" class="block text-gray-700 text-sm font-bold mb-2">File:</label>
                                                <input type="file" name="file" @change="onFileChange">
                                                <div v-if="$page.errors.file" class="text-red-500">{{ $page.errors.file[0] }}</div>
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
        props: ['data', 'errors'],
        data() {
            return {
                image: null,
                editMode: false,
                isOpen: false,
                form: {
                    order: null,
                    name: null,
                    type:null,
                    file: null,
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
                    order: null,
                    file: null,
                    type:null,
                    name:null,
                }
            },
            save: function (data) {

                var formdata = new FormData();
                formdata.append('order', this.form.order  || '');
                formdata.append('file', this.form.file  || '');
                formdata.append('name', this.form.name || '');
                formdata.append('type', this.form.type || '');

                this.$inertia.post('/gradings', formdata);
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

                var formdata = new FormData();
                formdata.append('id', data.id || '');
                formdata.append('file', this.form.file || '');
                formdata.append('order', this.form.order || '');
                formdata.append('name', this.form.name || '');
                formdata.append('type', this.form.type || '');
                formdata.append('_method', 'PUT');
                // data._method = 'PUT';
                this.$inertia.post('/gradings/' + data.id, formdata);
                this.reset();
                this.closeModal();
            },
            deleteRow: function (data) {
                if (!confirm('Are you sure want to remove?')) return;
                data._method = 'DELETE';
                this.$inertia.post('/gradings/' + data.id, data);
                this.reset();
                this.closeModal();
            },

            onFileChange(e) {
                this.form.file = e.target.files[0];
            }

        }
    }
</script>
