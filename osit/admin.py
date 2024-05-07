from ckeditor.widgets import CKEditorWidget
from django.contrib import admin

from osit.models import Award_And_Certificate, Slider, ConsultancyService, NewsRoom, Partner, Technology, Gallery, Video, Website_Setting, \
    Social_Media, Contact, Career, TeamMember, Capabilities, Values, WhyChoseUs, Office, Service, Feature, \
    CompanyQuality, AboutPageSetting, WhyChoseUsPageSetting, Membership

# Register your models here.
admin.site.register(Website_Setting)
admin.site.register(AboutPageSetting)
admin.site.register(WhyChoseUsPageSetting)
admin.site.register(Social_Media)
admin.site.register(Slider)
admin.site.register(ConsultancyService)
admin.site.register(Capabilities)
admin.site.register(Values)
admin.site.register(WhyChoseUs)
admin.site.register(NewsRoom)
admin.site.register(Partner)
admin.site.register(Technology)
admin.site.register(TeamMember)
admin.site.register(Gallery)
admin.site.register(Contact)
admin.site.register(Career)
admin.site.register(Office)
admin.site.register(Service)
admin.site.register(Feature)
admin.site.register(CompanyQuality)
admin.site.register(Membership)
admin.site.register(Award_And_Certificate)
admin.site.register(Video)