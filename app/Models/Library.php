<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'Name',
        'Type_of_name',
        'Role',
        'Title',
        'Date_of_creation_or_publication',
        'Dates_associated_with_name',
        'Type_of_resource',
        'Content_type',
        'Other_names',
        'Material_type',
        'BNB_number',
        'Archival_Resource_Key',
        'ISBN',
        'Variant_titles',
        'Series_title',
        'within_series',
        'Country_of_publication',
        'Place_of_publication',
        'Publisher',
        'Edition',
        'Physical_description',
        'Dewey_classification',
        'BL_shelfmark',
        'Genre',
        'Languages',
        'Notes',
        'Provenance',
        'Topics',
        'IsRented',
    ];
}
