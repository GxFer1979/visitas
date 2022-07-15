@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.visit.actions.create'))

@section('body')

    <div class="container-xl">
                <div class="card">
        <visit-form

        :action="'{{ url('admin/visits') }}'"

         {{-- :action="'{{ url('admin/visits')'"--}}
          {{-- :action="'{{ url('test') }}'"--}}
            :state="{{$state->toJson()}}"
            :dependency="{{$dependency->toJson()}}"


            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                   {{-- <i class="fa fa-plus"></i> {{ trans('admin.visit.actions.create')--}}
                   <center><H4>NUEVA VISITA</H4></center>



                </div>

                <div class="card-body">
                    @include('admin.visit.components.form-elementsc')
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary rounded-pill" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </visit-form>

        </div>

        </div>


@endsection
