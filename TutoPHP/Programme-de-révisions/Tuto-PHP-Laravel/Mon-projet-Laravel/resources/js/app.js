import "jquery";
import "datatables.net";
import "datatables.net-dt/css/jquery.dataTables.css";

import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
    $("#your-table-id").DataTable({
        ajax: {
            url: "/admin/api/users",
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
