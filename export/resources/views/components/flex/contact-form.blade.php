<section class="border-black border-2 md:mb-[3rem] mb-[1rem]">
    <div class="bg-primary-red md:px-[2.18rem] px-[1.75rem] md:py-[1.25rem] py-[1rem]">
      <h2 class="text-white leading-[60px] text-[3rem]">{{ $set['title'] }}</h2>
      <p class="text-white font-bold">{{ $set['description'] }}</p>
    </div>
    <statamic:form:contact_form class="bg-white md:px-[3.125rem] px-[1rem] md:py-[2rem] py-[1.25rem]">

        @if ($success)
            <div class="bg-[#008000] rounded-md text-white py-2 px-4  mb-[1rem]">
                {{ $success }}
            </div>
        @else
            @if (count($errors) > 0)
                <div class="bg-primary-red rounded-md text-white mb-[1rem] p-2">
                    @foreach ($errors as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
        @endif
        <div
            class="grid grid-cols-12 gap-[1rem]"
        >
            @foreach($fields as $field)
                @if($field['type'] == 'text' || $field['type'] == 'tel' || $field['type'] == 'email' || $field['type'] == 'textarea')
                    <div class="form-field flex flex-col gap-[.25rem] col-span-12 {{ $field['width'] === 50 ? 'lg:col-span-6' : 'col-span-12' }}">
                        <label for="First Name" class="font-bold text-primary-gray">{{$field['display']}}</label>
                        {!! $field['field'] !!}
                    </div>
                @endif

                @if($field['type'] == 'checkboxes')
                    <div class="form-field form-field-checkboxes col-span-12 {{ $field['width'] === 50 ? 'lg:col-span-6' : 'col-span-12' }}">
                        <label for="First Name" class="font-bold text-primary-gray">{{$field['display']}}</label>
                        {!! $field['field'] !!}
                    </div>
                @endif
            @endforeach
        </div>

      <button
        type="submit"
        class="cursor-pointer py-[.875rem] px-[1.25rem] inline-block bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2 mt-[1.75rem] md:w-auto w-full"
      >
          Submit
      </button>
    </statamic:form:contact_form>
  </section>
