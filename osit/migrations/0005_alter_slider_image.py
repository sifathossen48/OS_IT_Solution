# Generated by Django 4.2 on 2024-03-21 16:57

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0004_newsroom'),
    ]

    operations = [
        migrations.AlterField(
            model_name='slider',
            name='image',
            field=models.ImageField(upload_to='slider'),
        ),
    ]
