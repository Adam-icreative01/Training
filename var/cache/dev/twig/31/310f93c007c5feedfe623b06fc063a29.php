<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user_management/list.html.twig */
class __TwigTemplate_5e8a8ebad776fd73d2f9dedaf2498b7f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_management/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_management/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_management/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello UserManagementController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_management");
        yield "\" class=\"btn btn-primary\">Create User</a>
    </div>
    <div class=\"d-flex justity-content-start mb-5\">
        <div>
            <select id=\"frole\" class=\"form-control\">
                <option disabled selected>Select Role</option>
                <option value=\"admin\">Admin</option>
                <option value=\"user\">User</option>
                <option value=\"manager\">Manager</option>
            </select>
        </div>

        <div>
            <select id=\"fstatus\" class=\"form-control\">
                <option disabled selected>Select Status</option>
                <option value=\"1\">Active</option>
                <option value=\"0\">In-Active</option>                
            </select>
        </div>

        <div>
            <input id=\"fdates\" class=\"form-control\" name=\"dates\">
        </div>

        <div class=\"mx-2\">
            <button id=\"filter\" class=\"btn btn-primary\">Filter</button>
            <button id=\"clearAll\" class=\"btn btn-secondary\">Clear</button>
        </div>
    </div>
    <div class=\"form\">
        <table class=\"table striped\" id=\"userManagementTable\">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Hobbies</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 61
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        yield "    <script>
        \$(document).ready(function(){


            var start = moment().startOf('month');
            var end = moment();
            \$('#fdates').daterangepicker({
                startDate: start,
                endDate: end,
                opens : 'left',
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });

            //Fetching List
            \$(\"#userManagementTable\").DataTable({
                'columnDefs': [
                    { \"data\": \"id\",   \"targets\": 0},
                    { \"data\": \"first_name\",   \"targets\": 1},
                    { \"data\": \"last_name\",   \"targets\": 2},
                    { \"data\": \"email\",  \"targets\": 3},
                    { \"data\": \"age\",  \"targets\": 4},
                    { \"data\": \"hobby\",  \"targets\": 5},
                    { \"data\": \"gender\",  \"targets\": 6},
                    { \"data\": \"role\",  \"targets\": 7},
                    { \"data\": \"status\",  \"targets\": 8},
                    { \"data\": \"edit\",  \"targets\": 9},
                    { \"data\": \"delete\",  \"targets\": 10},
                ],
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        yield "\",
                    \"type\": \"POST\",
                    dataSrc: \"data\",
                    \"data\" : function(d) {
                        d.role = \$(\"#frole\").val();
                        d.status = \$('#fstatus').val();
                        d.date = \$('#fdates').val();
                    }
                },

                \"paging\" : true,
                \"info\" : true,
                \"searching\": true,
                \"pageLength\": 10,
            });

            \$(\"#filter\").on('click', function(){
                \$(\"#userManagementTable\").DataTable().ajax.reload();
            });          

            \$(\"#clearAll\").on('click', function(){
                \$(\"#frole\").prop('selectedIndex', 0);
                \$(\"#fstatus\").prop('selectedIndex', 0);

                \$(\"#fdates\").data('daterangepicker').setStartDate(start);
                \$(\"#fdates\").data('daterangepicker').setEndDate(end);
                \$(\"#userManagementTable\").DataTable().ajax.reload();
            })

            //Delete Record
            \$(\"#userManagementTable\").on('click', '.user_delete', function(){
                var id = \$(this).data('id');
                console.log(id);
                Swal.fire({
                    icon: 'info',
                    title: 'Are you sure ?',
                    text: 'You want to delete this record ?',
                    showConfirmButton: true,
                    showCancelButton: true,
                    cancelButtonText: 'No'
                }).then((result) => {
                    if(result.isConfirmed) 
                    {
                        \$.ajax({
                            url: \"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete");
        yield "\",
                            method: \"POST\",
                            data: {
                                \"id\": id
                            },
                            success: function(res) {
                                console.log(res);
                                \$(\"#userManagementTable\").DataTable().ajax.reload();
                            },
                            error: function(res) {
                                console.log()
                            }
                        })
                    }
                })
            })
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_management/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  270 => 145,  223 => 101,  188 => 68,  175 => 67,  160 => 61,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UserManagementController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <div>
        <a href=\"{{path('app_user_management')}}\" class=\"btn btn-primary\">Create User</a>
    </div>
    <div class=\"d-flex justity-content-start mb-5\">
        <div>
            <select id=\"frole\" class=\"form-control\">
                <option disabled selected>Select Role</option>
                <option value=\"admin\">Admin</option>
                <option value=\"user\">User</option>
                <option value=\"manager\">Manager</option>
            </select>
        </div>

        <div>
            <select id=\"fstatus\" class=\"form-control\">
                <option disabled selected>Select Status</option>
                <option value=\"1\">Active</option>
                <option value=\"0\">In-Active</option>                
            </select>
        </div>

        <div>
            <input id=\"fdates\" class=\"form-control\" name=\"dates\">
        </div>

        <div class=\"mx-2\">
            <button id=\"filter\" class=\"btn btn-primary\">Filter</button>
            <button id=\"clearAll\" class=\"btn btn-secondary\">Clear</button>
        </div>
    </div>
    <div class=\"form\">
        <table class=\"table striped\" id=\"userManagementTable\">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Hobbies</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                {# Datatable Ajax #}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function(){


            var start = moment().startOf('month');
            var end = moment();
            \$('#fdates').daterangepicker({
                startDate: start,
                endDate: end,
                opens : 'left',
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });

            //Fetching List
            \$(\"#userManagementTable\").DataTable({
                'columnDefs': [
                    { \"data\": \"id\",   \"targets\": 0},
                    { \"data\": \"first_name\",   \"targets\": 1},
                    { \"data\": \"last_name\",   \"targets\": 2},
                    { \"data\": \"email\",  \"targets\": 3},
                    { \"data\": \"age\",  \"targets\": 4},
                    { \"data\": \"hobby\",  \"targets\": 5},
                    { \"data\": \"gender\",  \"targets\": 6},
                    { \"data\": \"role\",  \"targets\": 7},
                    { \"data\": \"status\",  \"targets\": 8},
                    { \"data\": \"edit\",  \"targets\": 9},
                    { \"data\": \"delete\",  \"targets\": 10},
                ],
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"{{path('user_list')}}\",
                    \"type\": \"POST\",
                    dataSrc: \"data\",
                    \"data\" : function(d) {
                        d.role = \$(\"#frole\").val();
                        d.status = \$('#fstatus').val();
                        d.date = \$('#fdates').val();
                    }
                },

                \"paging\" : true,
                \"info\" : true,
                \"searching\": true,
                \"pageLength\": 10,
            });

            \$(\"#filter\").on('click', function(){
                \$(\"#userManagementTable\").DataTable().ajax.reload();
            });          

            \$(\"#clearAll\").on('click', function(){
                \$(\"#frole\").prop('selectedIndex', 0);
                \$(\"#fstatus\").prop('selectedIndex', 0);

                \$(\"#fdates\").data('daterangepicker').setStartDate(start);
                \$(\"#fdates\").data('daterangepicker').setEndDate(end);
                \$(\"#userManagementTable\").DataTable().ajax.reload();
            })

            //Delete Record
            \$(\"#userManagementTable\").on('click', '.user_delete', function(){
                var id = \$(this).data('id');
                console.log(id);
                Swal.fire({
                    icon: 'info',
                    title: 'Are you sure ?',
                    text: 'You want to delete this record ?',
                    showConfirmButton: true,
                    showCancelButton: true,
                    cancelButtonText: 'No'
                }).then((result) => {
                    if(result.isConfirmed) 
                    {
                        \$.ajax({
                            url: \"{{path('user_delete')}}\",
                            method: \"POST\",
                            data: {
                                \"id\": id
                            },
                            success: function(res) {
                                console.log(res);
                                \$(\"#userManagementTable\").DataTable().ajax.reload();
                            },
                            error: function(res) {
                                console.log()
                            }
                        })
                    }
                })
            })
        });
    </script>
{% endblock %}

", "user_management/list.html.twig", "/var/www/html/UserManagement/templates/user_management/list.html.twig");
    }
}
