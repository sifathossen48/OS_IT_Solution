# Generated by Django 4.2 on 2024-03-24 06:45

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0021_values'),
    ]

    operations = [
        migrations.AddField(
            model_name='newsroom',
            name='image_2',
            field=models.ImageField(null=True, upload_to='NewsRoom/'),
        ),
        migrations.AddField(
            model_name='newsroom',
            name='image_3',
            field=models.ImageField(null=True, upload_to='NewsRoom/'),
        ),
    ]
