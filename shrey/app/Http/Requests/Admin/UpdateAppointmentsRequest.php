<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'clients_id' => 'required',
            'employee_id' => 'required',
            'start_time' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'finish_time' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
        ];
    }
}
