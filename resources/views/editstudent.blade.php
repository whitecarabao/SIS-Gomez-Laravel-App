



@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Student Information</div>
                    <div class="card-body">
                        <div class="form-group">
                        <form action="{{ route('student.update',$student['studid']) }}" method="post">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="_token" value='{{ csrf_token() }}'> --}}
                <label for="studid">
                    Student ID:</label>
                    <input type="text" class="form-control" name='studid' id='studid' value="{{ $student['studid'] }}" readonly>
                <br>
                <label for="studfname">
                    First Name:</label>
                    <input type="text" class="form-control" name='studfname' id='studfname' value="{{ $student['studfname'] }}">
                    @foreach($errors->get('studfname') as $errorMessage )
                        <span>{{ $errorMessage }}</span>
                    @endforeach              
                <br>
                <label  for="studmname">
                    Middle Name (optional): </label>
                    <input type="text" class="form-control" name='studmname' id='studmname' value="{{ $student['studmname'] }}">
               
                <br>            
                <label for="studlname">
                    Last Name:</label>
                    <input type="text" class="form-control" name='studlname' id='studlname' value="{{ $student['studlname'] }}">
                    @foreach($errors->get('studlname') as $errorMessage )
                        <span>{{ $errorMessage }}</span>
                    @endforeach            
                <br>
                <label for="studprogram">Program:</label>
                <select name="studprogram" class="form-control form-control-sm" id="studprogram">
                    @php
                        $count = 1;
                    @endphp
                    @foreach($programs as $program)
                        @if(($count == 1) and ($student['studprogram'] <> $program['prog_sname']))
                            <option value="{{ $program['prog_sname'] }}" selected>{{ $program['prog_fname'] }}</option>  
                        @elseif($student['studprogram'] === $program['prog_sname'])
                            <option value="{{ $program['prog_sname'] }}" selected>{{ $program['prog_fname'] }}</option>     
                        @else
                            <option value="{{ $program['prog_sname'] }}">{{ $program['prog_fname']}}</option>
                        @endif
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </select>
                
                <br>
                <label for="studyear">Year:</label>
                <select name="studyear"  class="form-control form-control-sm" id="studyear">
                    @php
                        $count = 1; 
                    @endphp
                    @foreach($years as $number => $words)
                        @if(($count == 1) and ($student['studyear'] <> $number))
                            <option value="{{ $number }}" selected>{{ $words }}</option>   
                        @elseif($student['studyear'] == $number)    
                            <option value="{{ $number }}" selected>{{ $words }}</option>  
                        @else
                            <option value="{{ $number }}">{{ $words }}</option>
                        @endif
                        @php
                             $count++; 
                        @endphp
                    @endforeach
                </select>
                
                <br>
                <button type='submit' class="btn btn-lg btn-primary">
                    Update Student Information
                </button>
                <button type='reset' class="btn btn-lg btn-danger">
                    Reset Values
                </button>
        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


