from ckeditor.fields import RichTextField

from django.core.validators import FileExtensionValidator
from django.db import models

# Create your models here.

class Website_Setting(models.Model):
    site_name = models.CharField(max_length=50)
    site_logo = models.ImageField(upload_to='logo/')
    favicon = models.ImageField(upload_to='favicon/')
    phone = models.CharField(max_length=25)
    email = models.EmailField(max_length=50)
    developed_year = models.CharField(max_length=4)
    root_page_title = models.CharField(max_length=30)
    services_section_title = models.CharField(max_length=60)
    services_section_title2 = models.CharField(max_length=60)
    services_section_title3 = models.CharField(max_length=60)
    client_section_title = models.CharField(max_length=60)
    partner_section_title = models.CharField(max_length=60)
    partner_page_title = models.CharField(max_length=60)
    partner_icon = models.FileField(upload_to='icon/')
    partner_page_banner = models.ImageField(upload_to='banner/')
    footer_section_title = models.CharField(max_length=30)
    office_section_title = models.CharField(max_length=30)
    career_page_title = models.CharField(max_length=30)
    career_page_image = models.ImageField(upload_to='banner/')
    career_page_image_2 = models.ImageField(upload_to='banner/')
    career_page_image_3 = models.ImageField(upload_to='banner/')
    career_form_image = models.ImageField(upload_to='img/')
    gallery_page_title = models.CharField(max_length=30)
    gallery_section_title = models.CharField(max_length=50)
    contact_page_title = models.CharField(max_length=30)
    contact_page_banner = models.ImageField(upload_to='banner/')
    news_page_title = models.CharField(max_length=30)
    news_page_banner = models.ImageField(upload_to='banner/')
    team_page_title = models.CharField(max_length=30)
    team_page_banner = models.ImageField(upload_to='banner/')
    technology_page_title = models.CharField(max_length=30)
    technology_page_banner = models.ImageField(upload_to='banner/')
    technology_icon = models.FileField(upload_to='icon/')
    
    def __str__(self):
        return self.site_name
class AboutPageSetting(models.Model):
    about_page_title = models.CharField(max_length=30)
    about_page_banner = models.ImageField(upload_to='banner/')
    about_of_company = models.TextField()
    expertise_of_company = RichTextField()
    vision_and_mission_section_banner = models.ImageField(upload_to='banner/')
    vision_title = models.CharField(max_length=20)
    vision_image = models.ImageField(upload_to='img/')
    vision_desc = models.TextField()
    mission_title = models.CharField(max_length=20)
    mission_image = models.ImageField(upload_to='img/')
    mission_desc = models.TextField()
    capabilities_section_title = models.CharField(max_length=30)
    capabilities_section_banner = models.ImageField(upload_to='banner/')
    award_section_title = models.CharField(max_length=30)
    video_section_title = models.CharField(max_length=30)
    def __str__(self):
        return self.about_page_title

class WhyChoseUsPageSetting(models.Model):
    why_us_page_title = models.CharField(max_length=30)
    why_us_page_banner = models.ImageField(upload_to='banner/')
    business_solution_section_title = models.CharField(max_length=100)
    business_solution_section_desc = models.TextField(max_length=500)
    business_solution_section_image = models.ImageField(upload_to='img/')
    profession_of_company = RichTextField()
    profession_section_banner = models.ImageField(upload_to='banner/')
    values_section_title = models.CharField(max_length=30)
    def __str__(self):
        return self.why_us_page_title

class Social_Media(models.Model):
    link = models.CharField(max_length=80)
    icon = models.ImageField(upload_to='social_media')
    is_active = models.BooleanField(default=False)
    def __str__(self):
        return self.link
class Slider(models.Model):
    name = models.CharField(max_length=20)
    title = models.CharField(max_length=100, null=True, blank=True)
    desc = models.TextField(null=True,blank=True)
    image = models.ImageField(upload_to='slider/')
    def __str__(self):
        return self.name
   
    
class ConsultancyService(models.Model):
    icon = models.FileField(upload_to='icon/')
    title = models.CharField(max_length=40)
    def __str__(self):
        return self.title

class NewsRoom(models.Model):
    event = models.CharField(max_length=50)
    image = models.ImageField(upload_to='NewsRoom/')
    image_2 = models.ImageField(upload_to='NewsRoom/', null=True,blank=True)
    image_3 = models.ImageField(upload_to='NewsRoom/', null=True,blank=True)
    desc = models.TextField(max_length=300,null=True,blank=True)
    timestamp = models.DateField(auto_now=True)
    hiring_Activity = models.BooleanField(default=False)
    MOU_SignIn_Activity = models.BooleanField(default=False)
    Nasa_App_Activity = models.BooleanField(default=False)
    Support_Activity = models.BooleanField(default=False)
    Team_Activity = models.BooleanField(default=False)
    Job_Fair_Activity = models.BooleanField(default=False)

    def __str__(self):
        return self.event
    def short_desc(self):
        return self.desc[:250]

class Partner(models.Model):
    company_name = models.CharField(max_length=30)
    company_logo = models.ImageField(upload_to='partners/')
    is_only_client = models.BooleanField(default=False)
    def __str__(self):
        return self.company_name

class CompanyQuality(models.Model):
    title = models.CharField(max_length=25)
    def __str__(self):
        return self.title

class Technology(models.Model):
    tools_name = models.CharField(max_length=30)
    tools_logo = models.ImageField(upload_to='tools/')
    def __str__(self):
        return self.tools_name

class Gallery(models.Model):
    event_name = models.CharField(max_length=30)
    image = models.ImageField(upload_to='gellery/')
    internStudent = models.BooleanField(default=False)
    def __str__(self):
        return self.event_name

class Capabilities(models.Model):
    info = models.CharField(max_length=100)
    icon = models.FileField(upload_to='icon/')
    def __str__(self):
        return self.info

class Values(models.Model):
    title = models.CharField(max_length=30)
    desc = models.TextField(max_length=150)
    icon = models.FileField(upload_to='icon/')
    def __str__(self):
        return self.title
class Contact(models.Model):
    first_name = models.CharField(max_length=20)
    last_name = models.CharField(max_length=20)
    email = models.EmailField(max_length=60)
    message = models.TextField(max_length=1000)
    def __str__(self):
        return self.email
class Career(models.Model):
    name = models.CharField(max_length=40)
    email = models.EmailField(max_length=60, unique=True)
    message = models.TextField()
    cv = models.FileField(upload_to='cv/')
    def __str__(self):
        return self.name
class TeamMember(models.Model):
    name = models.CharField(max_length=35)
    title = models.CharField(max_length=40)
    academic_qualification = models.CharField(max_length=100)
    photo = models.ImageField(upload_to='team/')
    email = models.EmailField(max_length=100)
    desc = RichTextField()
    is_ceo = models.BooleanField(default=False)
    is_management_team_member = models.BooleanField(default=False)
    is_development_team_leader = models.BooleanField(default=False)
    is_development_team_member = models.BooleanField(default=False)
    is_ui_team_member = models.BooleanField(default=False)
    is_digital_marketing_team_member = models.BooleanField(default=False)
    is_hr_team_member = models.BooleanField(default=False)
    is_draft = models.BooleanField(default=False)

    @property
    def get_short_desc(self):
        return self.desc[:210]
    def get_short_desc2(self):
        return self.desc[:320]
    def get_short_desc3(self):
        return self.desc[:170]
    def __str__(self):
        return self.name
    def save(self, *args, **kwargs):
        if self.is_ceo:
            self.is_management_team_member = False
            self.is_development_team_leader = False
            self.is_development_team_member = False
        elif self.is_management_team_member:
            self.is_ceo = False
            self.is_development_team_leader = False
            self.is_development_team_member = False
        elif self.is_development_team_leader:
            self.is_ceo = False
            self.is_management_team_member = False
            self.is_development_team_member = False
        elif self.is_development_team_member:
            self.is_ceo = False
            self.is_management_team_member = False
            self.is_development_team_leader = False

        super(TeamMember, self).save(*args, **kwargs)

class WhyChoseUs(models.Model):
    title = models.CharField(max_length=100)
    image = models.FileField(upload_to='why-us/')
    is_important = models.BooleanField(default=False)
    def __str__(self):
        return self.title

class Office(models.Model):
    country_base_office = models.CharField(max_length=30)
    flag = models.FileField(upload_to='office/')
    detail = RichTextField(max_length=600)
    google_map_link = models.CharField(max_length=1000)
    def __str__(self):
        return self.country_base_office

class Service(models.Model):
    title = models.CharField(max_length=60)
    cover_photo = models.FileField(upload_to='service/')
    icon = models.FileField(upload_to='service/')
    desc = models.TextField(null=True, blank=True)
    image = models.FileField(upload_to='services/', null=True, blank=True)
    image_2 = models.FileField(upload_to='service/', null=True,blank=True)
    feature_title = models.CharField(max_length=200, null=True, blank=True)
    learning_objective = RichTextField(null=True,blank=True)
    image_3 = models.FileField(upload_to='service/', null=True,blank=True)
    image_4 = models.FileField(upload_to='service/', null=True,blank=True)
    more = RichTextField(null=True,blank=True)
    is_software_based = models.BooleanField(default=False)
    is_device_based = models.BooleanField(default=False)
    def __str__(self):
        return self.title
    def get_short_desc(self):
        return self.desc[:105]



class Feature(models.Model):
    title = models.CharField(max_length=50)
    icon = models.FileField(upload_to='feature')
    service = models.ForeignKey(Service, on_delete=models.CASCADE)
    def __str__(self):
        return self.title
class Membership(models.Model):
    title = models.CharField(max_length=30)
    logo = models.ImageField(upload_to='membership/')
    def __str__(self):
        return self.title

class Award_And_Certificate(models.Model):
    title = models.CharField(max_length=60)
    image = models.ImageField(upload_to='certificate/')
    def __str__(self):
        return self.title

class Video(models.Model):
    title = models.CharField(max_length=30)
    link = models.URLField(max_length=200)
    def __str__(self):
        return self.title