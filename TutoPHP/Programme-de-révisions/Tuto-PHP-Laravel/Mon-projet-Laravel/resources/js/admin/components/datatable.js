$(document).ready(function () {
    $("#myTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/admin/api/users", // Remplacez par l'URL de votre API
            type: "GET",
        },
        columns: [
            { data: "id", name: "id" },
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            { data: "created_at", name: "created_at" },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
    });
});
