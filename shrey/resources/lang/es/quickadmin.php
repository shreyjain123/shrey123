<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'clients' => [		'title' => 'Clients',		'fields' => [		],	],
		'clients' => [		'title' => 'Clients',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'employees' => [		'title' => 'Employees',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'working-hours' => [		'title' => 'Working hours',		'fields' => [			'employee' => 'Employee',			'date' => 'Date',			'start-time' => 'Start time',			'finish-time' => 'Finish time',		],	],
		'appointments' => [		'title' => 'Appointments',		'fields' => [			'clients' => 'Clients',			'employee' => 'Employee',			'start-time' => 'Start time',			'finish-time' => 'Finish time',			'comments' => 'Comments',		],	],
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Ver',
	'qa_update' => 'Actualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sin valores en la tabla',
	'qa_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'qa_logout' => 'Salir',
	'qa_add_new' => 'Agregar',
	'qa_are_you_sure' => 'Estás seguro?',
	'qa_back_to_list' => 'Regresar a la lista?',
	'qa_dashboard' => 'Panel de control',
	'qa_delete' => 'Eliminar',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Borrar permanentemente',
	'qa_all' => 'Todos',
	'qa_trash' => 'Papelera',
	'qa_delete_selected' => 'Eliminar seleccionado',
	'qa_category' => 'Categoría',
	'qa_categories' => 'Categorías',
	'qa_title' => 'Título',
	'qa_roles' => 'Roles',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Administración de usuarios',
	'qa_users' => 'Usuarios',
	'qa_user' => 'Usuario',
	'qa_name' => 'Nombre',
	'qa_email' => 'Correo',
	'qa_password' => 'Contraseña',
	'qa_remember_token' => 'Recordar token',
	'qa_permissions' => 'Permisos',
	'qa_client' => 'Cliente',
	'qa_current_password' => 'Contraseña actual',
	'qa_new_password' => 'Contraseña nueva',
	'qa_password_confirm' => 'Confirmación de contraseña nueva',
	'qa_dashboard_text' => 'Ha iniciado sesión',
	'qa_forgot_password' => 'Olvidó su contraseña?',
	'qa_remember_me' => 'Recuérdame',
	'qa_login' => 'Iniciar sesión',
	'qa_copy' => 'Copiar',
	'qa_reset_password' => 'Restablecer contraseña',
	'qa_email_greet' => 'Hola',
	'qa_confirm_password' => 'Confirma la contraseña',
	'qa_please_select' => 'Por favor seleccione',
	'qa_questions' => 'Preguntas',
	'qa_question' => 'Pregunta',
	'qa_answer' => 'Respuesta',
	'qa_project' => 'Proyecto',
	'qa_expenses' => 'Gastos',
	'qa_expense' => 'Gasto',
	'qa_amount' => 'Cantidad',
	'qa_address' => 'Dirección',
	'qa_contacts' => 'Contactos',
	'qa_first_name' => 'Nombre',
	'qa_last_name' => 'Apellido',
	'qa_phone' => 'Teléfono',
	'qa_category_name' => 'Nombre de categoría',
	'qa_products' => 'Productos',
	'qa_product_name' => 'Nombre de producto',
	'qa_price' => 'Precio',
	'qa_tag' => 'Etiqueta',
	'qa_photo1' => 'Foto 1',
	'qa_photo2' => 'Foto 2',
	'qa_photo3' => 'Foto 3',
	'qa_calendar' => 'Calendario',
	'qa_tasks' => 'Tareas',
	'qa_status' => 'Estado',
	'qa_messages' => 'Mensajes',
	'qa_you_have_no_messages' => 'No tienes mensajes.',
	'qa_all_messages' => 'Todos los mensajes',
	'qa_new_message' => 'Nuevo mensaje',
	'qa_change_password' => 'Cambiar contraseña',
	'qa_csv' => 'CSV',
	'qa_print' => 'Imprimir',
	'qa_excel' => 'Excel',
	'qa_colvis' => 'Visibilidad de columnas',
	'qa_pdf' => 'PDF',
	'qa_register' => 'Registro',
	'qa_registration' => 'Registración',
	'qa_not_approved_p' => 'La cuenta no ha sido aprobada por el Administrador. Por favor, sea paciente e intentelo nuevamente.',
	'qa_whoops' => 'Whoops!',
	'qa_serial_number' => 'Número de serie',
	'qa_text' => 'Texto',
	'qa_show' => 'Mostrar',
	'qa_sample_category' => 'Categoria de ejemplo',
	'qa_sample_question' => 'Pregunta de ejemplo',
	'qa_sample_answer' => 'Respuesta de ejemplo',
	'qa_user_actions' => 'Acciones de Usuario (Traza)',
	'qa_action' => 'Acciones',
	'qa_description' => 'Descripcion',
	'qa_valid_from' => 'Valido Desde',
	'qa_valid_to' => 'Valido Hasta',
	'qa_discount_amount' => 'Cantidad Descuento',
	'qa_discount_percent' => 'Descuento Percentil',
	'qa_coupons_amount' => 'Cantidad de Cupones',
	'qa_coupons' => 'Cupones',
	'qa_code' => 'Codigo',
	'qa_redeem_time' => 'Tiempo Redencion',
	'qa_coupon_management' => 'Administracion de Cupones',
	'qa_time_management' => 'Administracion de Tiempo',
	'qa_projects' => 'Proyectos',
	'qa_reports' => 'Reportes',
	'qa_time_entries' => 'Registros de Tiempos',
	'qa_work_type' => 'Tipo de Trabajo',
	'qa_start_time' => 'Tiempo de Inicio',
	'qa_end_time' => 'Tiempo Finalizacion',
	'qa_expense_category' => 'Tipo de Gasto',
	'qa_expense_management' => 'Administracion de Gastos',
	'qa_entry_date' => 'Fecha de Ingreso',
	'qa_monthly_report' => 'Reporte Mensual',
	'qa_companies' => 'Compañías',
	'qa_company_name' => 'Nombre de la Compañía',
	'qa_website' => 'Sitio Web',
	'qa_contact_management' => 'Administracion de Contactos',
	'qa_company' => 'Compañía',
	'qa_photo' => 'Foto (max 8mb)',
	'qa_product_management' => 'Administracion de Producto',
	'qa_tags' => 'Etiquetas',
	'qa_statuses' => 'Estatus',
	'qa_task_management' => 'Administracion de Tareas',
	'qa_attachment' => 'Archivo Adjunto',
	'qa_due_date' => 'Fecha Vencimiento',
	'qa_assigned_to' => 'Asignado a',
	'qa_assets' => 'Activos',
	'qa_asset' => 'Activo',
	'qa_location' => 'Ubicacion',
	'qa_locations' => 'Lugar',
	'qa_assigned_user' => 'Asignado a (Usuario)',
	'qa_notes' => 'Notas',
	'qa_assets_history' => 'Movimientos de Inventario',
	'qa_assets_management' => 'Inventario Administracion',
	'qa_group_by' => 'Agrupar por',
	'qa_chart_type' => 'Tipo de Grafica',
	'qa_create_new_report' => 'Crear Nuevo Reporte',
	'qa_no_reports_yet' => 'Aun Sin reportes',
	'qa_created_at' => 'Creado el',
	'qa_updated_at' => 'Actualizado el',
	'qa_deleted_at' => 'Eliminado el',
	'qa_outbox' => 'Bandeja de salida',
	'qa_inbox' => 'Bandeja de entrada',
	'qa_recipient' => 'Destinatario',
	'qa_subject' => 'Asunto',
	'qa_message' => 'Mensaje',
	'qa_send' => 'Enviar',
	'qa_reply' => 'Responder',
	'qa_country' => 'País',
	'qa_file' => 'Archivo',
	'qa_income_source' => 'Fuente de Ingresos',
	'qa_income_sources' => 'Fuente de Egresos',
	'qa_budget' => 'Presupuesto',
	'qa_currency' => 'Moneda',
	'qa_email_regards' => 'Saludos',
	'qa_import_data' => 'Importar dato',
	'qa_faq_management' => 'Administración de Preguntas Frecuentes',
	'qa_administrator_can_create_other_users' => 'Administrador (puede crear otros usuarios)',
	'qa_simple_user' => 'Usuario Simple',
	'qa_action_model' => 'Modelo de Acción',
	'qa_action_id' => 'ID de Acción',
	'qa_time' => 'Hora',
	'qa_campaign' => 'Campaña',
	'qa_campaigns' => 'Campañas',
	'qa_work_types' => 'Tipos de Trabajo',
	'qa_expense_categories' => 'Tipos de Gasto',
	'qa_income_categories' => 'Tipo de Ingreso',
	'qa_phone1' => 'Teléfono 1',
	'qa_phone2' => 'Teléfono 2',
	'qa_content_management' => 'Administración de Contenido',
	'qa_excerpt' => 'Extracto',
	'qa_featured_image' => 'Imagen Destacada',
	'qa_pages' => 'Paginas',
	'qa_axis' => 'Eje',
	'qa_reports_x_axis_field' => 'eje-x por favor escoja uno de los campos de fecha/hora',
	'qa_reports_y_axis_field' => 'eje-y por favor escoja uno de los campos numéricos',
	'qa_select_crud_placeholder' => 'Por favor seleccione uno de sus CRUDs',
	'qa_select_dt_placeholder' => 'Por favor seleccione uno de los campos de fecha/hora',
	'qa_aggregate_function_use' => 'Agregue función a utilizar',
	'qa_x_axis_group_by' => 'eje-x agrupar por',
	'qa_x_axis_field' => 'eje-x campo (fecha/hora)',
	'qa_y_axis_field' => 'eje-y campo',
	'qa_integer_float_placeholder' => 'Por favor seleccione uno de los campos entero/flotante',
	'qa_change_notifications_field_1_label' => 'Enviar notificación al usuario por email',
	'qa_change_notifications_field_2_label' => 'Cuando se ingrese en CRUD',
	'qa_select_users_placeholder' => 'Por favor seleccione uno de sus Usuarios',
	'qa_is_created' => 'es creado',
	'qa_is_updated' => 'es actualizado',
	'qa_is_deleted' => 'es borrado',
	'qa_notifications' => 'Notificaciones',
	'qa_notify_user' => 'Notificar Usuario',
	'qa_when_crud' => 'Cuando CRUD',
	'qa_create_new_notification' => 'crear nueva Notificacion',
	'qa_upgrade_to_premium' => 'Actualizar a Premium',
	'qa_calendar_sources' => 'Fuentes de Calendario',
	'qa_new_calendar_source' => 'Crear una nueva fuente de calendario',
	'qa_crud_title' => 'Título del CRUD',
	'qa_crud_date_field' => 'Campo fecha del CRUD',
	'qa_prefix' => 'Prefijo',
	'qa_label_field' => 'Etiqueta del campo',
	'qa_suffix' => 'Sufijo',
	'qa_no_calendar_sources' => 'Sin fuentes de calendario aun.',
	'qa_crud_event_field' => 'Etiqueta de campo de evento',
	'qa_create_new_calendar_source' => 'Crear nueva fuente de Calendario',
	'qa_edit_calendar_source' => 'Editar fuente de Calendario',
	'qa_client_management' => 'Administración de clientes',
	'qa_client_management_settings' => 'Configuración de administración de clientes',
	'qa_client_status' => 'Estado del Cliente',
	'qa_clients' => 'Clientes',
	'qa_client_statuses' => 'Estados del Cliente',
	'qa_currencies' => 'Monedas',
	'qa_main_currency' => 'Moneda principal',
	'qa_documents' => 'Documents',
	'qa_not_approved_title' => 'No estas aprobado',
	'qa_there_were_problems_with_input' => 'Hubo problemas con esta entrada',
	'qa_csvImport' => 'Importación CSV',
	'qa_csv_file_to_import' => 'Archivo CSV a importar',
	'qa_parse_csv' => 'Rasterizar CSV',
	'qa_imported_rows_to_table' => 'Importación de :rows líneas a la tabla :table',
	'qa_if_you_are_having_trouble' => 'Si estás teniendo problemas dale click a ',
	'qa_skype' => 'Skype',
	'qa_start_date' => 'Fecha inicio',
	'qa_project_status' => 'Estado del proyecto',
	'qa_transactions' => 'Operaciones',
	'qa_fee_percent' => 'Porcentaje de tarifa',
	'qa_note_text' => 'Nota de texto',
	'qa_project_statuses' => 'Estados del proyecto',
	'qa_transaction_types' => 'Tipos de operación',
	'qa_transaction_type' => 'Tipo de operación',
	'qa_transaction_date' => 'Fecha de operación',
	'qa_reset_password_woops' => '<strong>¡Ups!</strong> Hubo problemas con la entrada:',
	'qa_copy_paste_url_bellow' => 'botón, copiar y pegar la siguiente URL en tu navegador',
	'qa_file_contains_header_row' => '¿El archivo contiene fila de encabezado?',
	'qa_stripe_transactions' => 'Transacciones con Stripe',
	'qa_email_line1' => 'Estás recibiendo este mensaje porque alguien solicitó restablecer la contraseña de esta cuenta.',
	'qa_email_line2' => 'Si no solicitado el restablecimiento de tu contraseña no es necesario que hagas nada.',
	'quickadmin_title' => 'shrill',
];