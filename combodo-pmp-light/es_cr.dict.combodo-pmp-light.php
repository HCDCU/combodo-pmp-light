<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Contact class
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Contact/Attribute:project_list' => 'Open projects I\'m involved in',
	'Class:Contact/Attribute:projects_list' => 'Proyectos',
	'Contact:Info:ProjectManager'=> 'Projects I am project manager or sponsor',
	'Contact:Info:WBSManager'=> 'Deliverables I am accountable on',
	'Class:Contact/Attribute:wbs_list' => 'Open deliverables I\'m involved on',
	'Class:Contact/Attribute:wbss_list' => 'Entregables',
	'Class:Contact/Attribute:wbss_list+' => 'Deliverables to work on',
	'Class:Contact/Tab:PMP' => 'Proyectos y entregables',
	'Class:Contact/Tab:PMP+' => 'All open projects and deliverables I work on',
	'Class:lnkContactToProject' => 'Link Contact / Project',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Contacto',
	'Class:lnkContactToProject/Attribute:project_id' => 'Proyecto',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Customer',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Resource',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Allocated days',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => 'Allocated percent',
	'Class:lnkContactToTicket/Attribute:category' => 'Responsibility',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Customer',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Resource',
	'Class:lnkContactToTicket/Attribute:influence' => 'Influence',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Behavior in this project',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Low',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Strong',
	'Class:lnkContactToTicket/Attribute:power' => 'Power',
	'Class:lnkContactToTicket/Attribute:power+' => 'Power of decision',
	'Class:lnkContactToWBS' => 'Link Contact / WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Allocated days',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => 'Allocated percent',
	'Class:lnkContactToWBS/Attribute:category' => 'Responsibility',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Customer',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Resource',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Stakeholders',
	'Class:lnkContactToWBS/Attribute:influence' => 'Influence',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Behavior in this project',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Low',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Strong',
	'Class:lnkContactToWBS/Attribute:power' => 'Power',
	'Class:lnkContactToWBS/Attribute:power+' => 'Power of decision',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Entregables',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Project' => 'Proyecto',
	'Class:Project/Attribute:agent_id' => 'Administrador del Proyecto',
	'Class:Project/Attribute:allocatedtimes_list' => 'AllocatedTimes',
	'Class:Project/Attribute:calculated_end_date' => 'Latest deliverable end date',
	'Class:Project/Attribute:calculated_end_date+' => 'Take the latest deliverable date',
	'Class:Project/Attribute:caller_id' => 'Patrocinador',
	'Class:Project/Attribute:constraints' => 'Restricciones',
	'Class:Project/Attribute:creation_date' => 'Fecha de creación',
	'Class:Project/Attribute:description' => 'Descripción',
	'Class:Project/Attribute:estimated_budget' => 'Presupuesto estimado',
	'Class:Project/Attribute:exclusions' => 'Exclusiones',
	'Class:Project/Attribute:contacts_list' => 'Participantes',
	'Class:Project/Attribute:contacts_list+' => 'Todos los contactos involucrados en el proyecto',
	'Class:Project/Attribute:projectchanges_list' => 'Cambios del Proyecto',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Cambio del Proyecto no cerrado, ni rechazado, ligado a entregable no cerrado.',
	'Class:Project/Attribute:status' => 'Estado',
	'Class:Project/Attribute:status/Value:cancelled' => 'Cancelado',
	'Class:Project/Attribute:status/Value:closed' => 'Cerrado',
	'Class:Project/Attribute:status/Value:executed' => 'Ejecutando',
	'Class:Project/Attribute:status/Value:initiated' => 'Inicializado',
	'Class:Project/Attribute:status/Value:monitored' => 'Monitoreo',
	'Class:Project/Attribute:status/Value:planned' => 'Planeación',
	'Class:Project/Attribute:team_id' => 'Equipo del proyecto',
	'Class:Project/Attribute:title' => 'Título',
	'Class:Project/Attribute:wbs_cost' => 'Costos de entregables',
	'Class:Project/Attribute:wbs_costs' => 'Costos de entregables',
	'Class:Project/Attribute:wbss_list' => 'Entregables',
	'Class:Project/Attribute:tickets_list' => 'Ticket Relacionado',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Entregables no cerrados',
	'Class:Project/Attribute:requirement' => 'Requerimientos',
	'Class:Project/Attribute:org_id' => 'Cliente',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Cancelar proyecto',
	'Class:Project/Stimulus:ev_close' => 'Cerrar',
	'Class:Project/Stimulus:ev_execute' => 'Ejecutar',
	'Class:Project/Stimulus:ev_monitor' => 'Monitor',
	'Class:Project/Stimulus:ev_monotir' => 'To monitor',
	'Class:Project/Stimulus:ev_plan' => 'Plan',
	'Class:Project/Stimulus:ev_reexecute' => 'Volver a ejecutar',
	'Class:Project/Tab:Summary' => 'Resumen',
	'Class:Project/Tab:Summary+' => 'Resumen del proyecto actual',
	'Class:Project:Display:delivrables_costs' => 'Costo total de los entregables',
	'Class:Project/Attribute:revised_end_date' => 'Revised end date',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Presupuesto reservado',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Monto del presupuesto reservado para administración e imprevistos',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
    'Class:Project/Attribute:project_completion' => 'Avance del proyecto',
    'Class:Project/Attribute:project_completion+' => 'Porcentaje de avance en los entregables',
	'Class:Project:Summary_costs' => 'Información de costos',
	'Class:Project:Summary_general' => 'Información general',
	'Project:Budget' => 'Costos',
	'Project:Contacts' => 'Contactos',
	'Project:Costs' => 'Costos',
	'Project:Dates' => 'Fechas',
	'Project:Details' => 'Detalles',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'End date must be greater than start date',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'Project End date must be greater than latest date of deliverable',
	'Project:GeneralInfo' => 'Información',

	'Menu:MyProject' => 'Mis proyectos',
	'Menu:MyProject+' => 'Mis proyectos como adminsitrador del proyecto',
	'Menu:NewProject' => 'Nuevo proyecto',
	'Menu:Overview' => 'Resumen',
	'Menu:Project:Overview' => 'Resumen',
	'Menu:ProjectChangeMenu' => 'Cambio en proyecto',
	'Menu:ProjectManagement' => 'Administración de Proyectos',
	'Menu:ProjectMenu' => 'Proyectos',
	'Menu:SearchProject' => 'Buscar proyecto',

	'UI:AddLinkedObjectsOf_Class' => 'Add %1$s objects...',
	'UI:ProjectMgmtMenuOverview:Title' => 'Dashboard',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Open issues by customer project',
	'UI-ProjectManagementOverview-Last-12Months' => 'Proyectos iniciados en los últimos 12 meses',
	'UI-ProjectManagementOverview-Last-3Months' => 'Proyectos de los últimos 3 meses (por cliente)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Proyectos abiertos por estado',

	'Class:Project/CreateDeliverable' => 'Crear entregable',
	'Class:Project/CreateDeliverableForm' => 'Create a deliverable from %1$s',
	'Class:Project/ReportLabel' => 'Created from %1$s',
	'Class:Project/DuplicateProject' => 'Duplicar Proyecto',
	'Class:Project/DuplicateProjectForm' => 'Duplicate a project from %1$s',
	'Class:Ticket/Attribute:related_project' => 'Proyecto relacionado',
	'Class:Ticket/Attribute:related_project_id' => 'Proyecto relacionado',

));


// WBS class
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:WBS' => 'Entregble',
	'Class:WBS/Attribute:acceptance' => 'Criterios de aceptación',
	'Class:WBS/Attribute:available_budget' => 'Presupuesto disponible',
	'Class:WBS/Attribute:completion' => '% completado',
	'Class:WBS/Attribute:contacts_list' => 'Stakeholders',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Stakeholders linked to project',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => 'Stakeholders linked to running deliverables',
	'Class:WBS/Attribute:contacts_list+' => 'All the contacts involved on deliverables',
	'Class:WBS/Attribute:delay' => 'Delay',
	'Class:WBS/Attribute:description' => 'Descripción',
	'Class:WBS/Attribute:end_date' => 'Fecha de finalización solicitada',
	'Class:WBS/Attribute:freetime' => 'Desde ahora hasta la fecha de cierre',
	'Class:WBS/Attribute:labor_cost' => 'Labor cost',
	'Class:WBS/Attribute:material_cost' => 'Material cost',
	'Class:WBS/Attribute:name' => 'Nombre',
	'Class:WBS/Attribute:project_id' => 'Proyecto',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Fecha de cierre planeada',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Fecha de inicio planeada',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => 'Fecha de inicio solicitada',
	'Class:WBS/Attribute:status' => 'Estado',
	'Class:WBS/Attribute:status/Value:cancel' => 'Cancelado',
	'Class:WBS/Attribute:status/Value:closed' => 'Completado',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'Pendiente de entregable previo',
	'Class:WBS/Attribute:status/Value:running' => 'En proceso',
	'Class:WBS/Attribute:status+' => 'Estado por WBS',
	'Class:WBS/Attribute:technical_info' => 'Technical information',
	'Class:WBS/Attribute:time_planned' => 'Tiempo estimado',
	'Class:WBS/Attribute:wbs_budget' => 'Presupuesto',
	'Class:WBS/Attribute:wbs_cost' => 'Costo total',
	'Class:WBS/Attribute:wbs_log' => 'Deliverable log',
	'Class:WBS/Attribute:wbs_owner_id' => 'Propietario',
	'Class:WBS/Attribute:wbs_real_costs' => 'WBS costos reales',
	'Class:WBS/Attribute:wbss_child_list' => 'Entregables Hijo',
	'Class:WBS/Attribute:wbss_parent_list' => 'Entregables Padre',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Cancelar entregable',
	'Class:WBS/Stimulus:ev_closed' => 'Cerrar',
	'Class:WBS/Stimulus:ev_reopen' => 'Re-abrir',
	'Class:WBS/Stimulus:ev_running_admin' => 'Activate child task',
	'Class:WBS+' => 'List of deliverable of Work Breakdown Structure',
	'WBS:Cost' => 'Costos',
	'WBS:Dates' => 'Fechas',
	'WBS:Error:ParentCantBeChildren' => 'You cannot be your own parent deliverable',
	'WBS:Execution' => 'Ejecución',
	'WBS:Info' => 'Información',
	'Class:WBS/Error:Contactnotfound' => '%1$s is not defined as stakeholder of project linked? You should add him.',

	'Class:lnkWBSToWBS' => 'Link Child WBS To Parent WBS',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Child deliverable',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Parent deliverable',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Parent deliverable',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'Mis entregables',
	'Menu:MyWBS+' => 'WBS I own',
	'Menu:NewWBS' => 'Nuevo entregable',
	'Menu:WBSMenu' => 'Entregables',
	'Menu:SearchWBS' => 'Buscar entregable',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Entregables pendientes por proyecto',
));


//
// Class: Ticket
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Related project ref',
	'Class:Ticket/Attribute:related_project_ref+' => '',
));

//
// Class: WBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Pending parent',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => 'Running',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Child start date',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Child end date',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Parent start date',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Parent end date',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'ID del Proyecto',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
