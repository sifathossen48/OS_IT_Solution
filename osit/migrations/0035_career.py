# Generated by Django 4.2 on 2024-03-24 09:55

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0034_website_setting_career_page_image_3'),
    ]

    operations = [
        migrations.CreateModel(
            name='Career',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=40)),
                ('email', models.EmailField(max_length=60)),
                ('message', models.TextField()),
                ('file', models.FileField(upload_to='cv/')),
            ],
        ),
    ]
