# Generated by Django 4.2 on 2024-03-25 07:23

import ckeditor.fields
from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0041_teammember_photo'),
    ]

    operations = [
        migrations.AddField(
            model_name='website_setting',
            name='expertise_of_company',
            field=ckeditor.fields.RichTextField(default=1),
            preserve_default=False,
        ),
    ]
