<div class="active_tab"></div>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="details">

    <li role="presentation" class="active">
      <a href="#comunicacions_tab" aria-controls="comunicacions_tab" role="tab" data-toggle="tab">Comunicacions</a>
    </li>

    <li role="presentation">
      <a href="#consums_tab" aria-controls="consums_tab" role="tab" data-toggle="tab">Consums</a>
    </li>

    <li role="presentation">
      <a href="#incidencies_tab" aria-controls="incidencies_tab" role="tab" data-toggle="tab">Incidències</a>
    </li>

    <li role="presentation">
      <a href="#observacions_tab" aria-controls="observacions_tab" role="tab" data-toggle="tab">Observacions</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="comunicacions_tab">
      @include('clients.partials.comunicacions')
    </div>

    <div role="tabpanel" class="tab-pane" id="consums_tab">
      @include('clients.partials.consums')
    </div>

    <div role="tabpanel" class="tab-pane" id="incidencies_tab">
      @include('clients.partials.incidencies')
    </div>

    <div role="tabpanel" class="tab-pane" id="observacions_tab">
      @include('clients.partials.observacions')
    </div>

  </div>

</div>