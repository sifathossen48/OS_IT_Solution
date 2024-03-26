from ckeditor.widgets import CKEditorWidget
from django.contrib import admin

from osit.models import Slider, ConsultancyService, NewsRoom, Partner, Technology, Gallery, Website_Setting, \
    Social_Media, Contact, Career, TeamMember, Capabilities, Values, WhyChoseUs, Office, Service, Feature, \
    CompanyQuality

# Register your models here.
admin.site.register(Website_Setting)
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